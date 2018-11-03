<?php
	/**
	 * Created by PhpStorm.
	 * User: fabrizio
	 * Date: 09/08/18
	 * Time: 17.42
	 */
	namespace Core\Facades;

	use Illuminate\Support\Facades\Facade;

	class LogFacade extends Facade
	{
		protected static function getFacadeAccessor()
		{
			return 'service.log';
		}
	}