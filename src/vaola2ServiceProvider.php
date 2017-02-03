<?php
namespace vaola2;
use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;
class vaola2ServiceProvider extends DataExchangeServiceProvider
{
	public function register()
	{
	}
	public function exports(ExportPresetContainer $container)
	{
		$formats = [
			'vaola2DE',
			          
		];
		foreach ($formats as $format)
		{
			$container->add(
				$format,
				'vaola2\ResultFields\\'.$format,
				'vaola2\Generators\\'.$format,
				'vaola2\Filters\\' . $format
			);
		}
	}
}