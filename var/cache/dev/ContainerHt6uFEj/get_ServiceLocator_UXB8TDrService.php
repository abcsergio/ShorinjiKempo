<?php

namespace ContainerHt6uFEj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UXB8TDrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uXB8TDr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uXB8TDr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ActualiteController::show' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\ActualiteController::showAll' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController::add' => ['privates', '.service_locator.xmzUWmn', 'get_ServiceLocator_XmzUWmnService', true],
            'App\\Controller\\AdminController::addActualite' => ['privates', '.service_locator.7mml5ZO', 'get_ServiceLocator_7mml5ZOService', true],
            'App\\Controller\\AdminController::addArticle' => ['privates', '.service_locator.bouBg64', 'get_ServiceLocator_BouBg64Service', true],
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\AdminController::deleteActualite' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController::deleteArticle' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\AdminController::detailsActualite' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController::detailsArticle' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\AdminController::gestionActualites' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController::gestionArticles' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\AdminController::showAll' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\AdminController::update' => ['privates', '.service_locator.daCyYuT', 'get_ServiceLocator_DaCyYuTService', true],
            'App\\Controller\\AdminController::updateActualite' => ['privates', '.service_locator.7mml5ZO', 'get_ServiceLocator_7mml5ZOService', true],
            'App\\Controller\\AdminController::updateArticle' => ['privates', '.service_locator.bouBg64', 'get_ServiceLocator_BouBg64Service', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\ArticleController::showAll' => ['privates', '.service_locator.Iib.K07', 'get_ServiceLocator_Iib_K07Service', true],
            'App\\Controller\\ArticleController::showByCategorie' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ActualiteController:show' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\ActualiteController:showAll' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController:add' => ['privates', '.service_locator.xmzUWmn', 'get_ServiceLocator_XmzUWmnService', true],
            'App\\Controller\\AdminController:addActualite' => ['privates', '.service_locator.7mml5ZO', 'get_ServiceLocator_7mml5ZOService', true],
            'App\\Controller\\AdminController:addArticle' => ['privates', '.service_locator.bouBg64', 'get_ServiceLocator_BouBg64Service', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\AdminController:deleteActualite' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController:deleteArticle' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\AdminController:detailsActualite' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController:detailsArticle' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\AdminController:gestionActualites' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\AdminController:gestionArticles' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\AdminController:showAll' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\AdminController:update' => ['privates', '.service_locator.daCyYuT', 'get_ServiceLocator_DaCyYuTService', true],
            'App\\Controller\\AdminController:updateActualite' => ['privates', '.service_locator.7mml5ZO', 'get_ServiceLocator_7mml5ZOService', true],
            'App\\Controller\\AdminController:updateArticle' => ['privates', '.service_locator.bouBg64', 'get_ServiceLocator_BouBg64Service', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\ArticleController:showAll' => ['privates', '.service_locator.Iib.K07', 'get_ServiceLocator_Iib_K07Service', true],
            'App\\Controller\\ArticleController:showByCategorie' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.EN89NzT', 'get_ServiceLocator_EN89NzTService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ActualiteController::show' => '?',
            'App\\Controller\\ActualiteController::showAll' => '?',
            'App\\Controller\\AdminController::add' => '?',
            'App\\Controller\\AdminController::addActualite' => '?',
            'App\\Controller\\AdminController::addArticle' => '?',
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::deleteActualite' => '?',
            'App\\Controller\\AdminController::deleteArticle' => '?',
            'App\\Controller\\AdminController::detailsActualite' => '?',
            'App\\Controller\\AdminController::detailsArticle' => '?',
            'App\\Controller\\AdminController::gestionActualites' => '?',
            'App\\Controller\\AdminController::gestionArticles' => '?',
            'App\\Controller\\AdminController::showAll' => '?',
            'App\\Controller\\AdminController::update' => '?',
            'App\\Controller\\AdminController::updateActualite' => '?',
            'App\\Controller\\AdminController::updateArticle' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\ArticleController::showAll' => '?',
            'App\\Controller\\ArticleController::showByCategorie' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ActualiteController:show' => '?',
            'App\\Controller\\ActualiteController:showAll' => '?',
            'App\\Controller\\AdminController:add' => '?',
            'App\\Controller\\AdminController:addActualite' => '?',
            'App\\Controller\\AdminController:addArticle' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:deleteActualite' => '?',
            'App\\Controller\\AdminController:deleteArticle' => '?',
            'App\\Controller\\AdminController:detailsActualite' => '?',
            'App\\Controller\\AdminController:detailsArticle' => '?',
            'App\\Controller\\AdminController:gestionActualites' => '?',
            'App\\Controller\\AdminController:gestionArticles' => '?',
            'App\\Controller\\AdminController:showAll' => '?',
            'App\\Controller\\AdminController:update' => '?',
            'App\\Controller\\AdminController:updateActualite' => '?',
            'App\\Controller\\AdminController:updateArticle' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\ArticleController:showAll' => '?',
            'App\\Controller\\ArticleController:showByCategorie' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
