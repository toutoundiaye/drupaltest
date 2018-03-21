<?php

namespace Drupal\premium\Form;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;





class RoleUserForm extends FormBase
{
    /**
     * @var AccountInterface $account
     */
    protected $account;

    /**
     * The entity manager. Can be used to load user entities.
     *
     * @var EntityTypeManagerInterface $entityManager
     */
    protected $entityManager;


    /**
     * Class constructor.
     */
    public function __construct(AccountInterface $account, EntityTypeManagerInterface $entityManager)
    {
        $this->account = $account;
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        // Instantiates this form class.
        return new static(
            // Load the service required to construct this class.
            $container->get('current_user'),
            $container->get('entity_type.manager')

        );
    }

    /**
     * @return string
     */
// Déclaration
    public function getFormId()
    {
        return 'role_user_form';
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     * @return array
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['id_user'] = array(
            '#type' => 'number',
            '#attributes' => array(
                'placeholder' => t('Indicate your id')),
            '#title' => t('User Id'),
            '#required' => TRUE,
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => t('Submit'),
        );

        return $form;
    }

    /**
     * @param array $form
     * @param FormStateInterface $form_state
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Traitement des données soumises.
        //Utiliser l'utilisateur courant
        $id = $this->account->id();
        $displayName = $this->account->getDisplayName();

        // Récupérer les données de l'utilisateur renseigné
        $uid = $form_state->getValue('id_user');
        $user = $this->entityManager->getStorage('user')->load($uid);
        $userId = $user->id();
        $userName = $user->getUserName();
        $roles = $user->getRoles();


        drupal_set_message($this->t('<p>'.'Hello @displayName : @id'.'</p>' .
        '<p>'.'Your are looking at @userName and its roles are : @roles'.'</p>',
            array(
                '@displayName' => $displayName,
                '@id' => $id,
                '@userName' => $userName,
                '@roles' => implode(', ', $roles),
            )
        ));
    }
}