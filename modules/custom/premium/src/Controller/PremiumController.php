<?php

namespace Drupal\premium\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\premium\PremiumService;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PremiumController extends ControllerBase
{
    /**
     *
     */
     protected $premiumService;

     public function __construct(PremiumService $premiumService )
     {
         $this->premiumService = $premiumService;
     }

    /**
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        // Instantiates this form class.
        return new static(
        // Load the service required to construct this class.
            $container->get('premiumService')
        );
    }
    /**
     * Display the markup.
     *
     * @return array
     */
    public function whoIAm()
    {
       $message = 'Vous ne pouvez pas voir les contenus premium';
       $color = 'red';

       if (\Drupal::currentUser()->hasPermission('access premium content')) {
        $message = 'Vous pouvez voir les contenus premium';
        $color = 'blue';
       }

       return [
            '#theme' => 'amIPremium',
            '#message' => $message,
            '#color' => $color,
        ];

    }

    /**
     * Display the markup.
     *
     * @return array
     */
    public function whoIsHe($uid)
    {
        $premiumService = \Drupal::service('premiumService');
        $message = 'Vous ne pouvez pas voir les contenus premium';

 //       Sans usage du service premiumService
//        if (\Drupal\user\Entity\User::load($uid)->hasPermission('access premium content')) {
//            $message = 'Vous pouvez voir les contenus premium';
//        }

        // En faisant appel au service premiumService
        if ($premiumService->isUserPremium($uid)){
            $message = 'Vous pouvez voir les contenus premium';
        }
        return [
          '#type' => 'markup',
          '#markup' => $this->t($message),
        ];
    }

    /**
     * Display the markup.
     *
     * @return array
     */
    public function gold()
    {
        $message = 'Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est,
         decreta provincia. Sortietur an non? Nam et non sortiri absurdum est, et, quod sortitus sis, 
         non habere. Proficiscetur paludatus? Quo? Quo pervenire ante certam diem non licebit. ianuario, 
         Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente provincia.
         Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et 
         furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit 
         rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem 
         laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi 
         sui considerans documento recenti similia formidabat.';

        return [
            '#type' => 'markup',
            '#markup' => $this->t($message),
        ];

    }

    
}
