<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new RMCARGO\DashboardFABundle\RMCARGODashboardFABundle(),
            new RMCARGO\DashboardAdminBundle\RMCARGODashboardAdminBundle(),
            new General\LoginBundle\GeneralLoginBundle(),
            new RMCARGO\DashboardChiefSectorBundle\RMCARGODashboardChiefSectorBundle(),
            new RMCARGO\DashboardRHBundle\RMCARGODashboardRHBundle(),
            new DBORM\CSIBundle\DBORMCSIBundle(),
            new DBORM\OLDCSIBundle\DBORMOLDCSIBundle(),
            new General\WidgetBundle\GeneralWidgetBundle(),
        	//new FOS\RestBundle\FOSRestBundle(),
        	//new JMS\SerializerBundle\JMSSerializerBundle(),
        	//new FSC\HateoasBundle\FSCHateoasBundle(),
            new Price\DashboardAdminBundle\PriceDashboardAdminBundle(),
            new RMCCCAction\RMCCCBundle\RMCCCActionRMCCCBundle(),
            new DBORM\KLMBundle\DBORMKLMBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
