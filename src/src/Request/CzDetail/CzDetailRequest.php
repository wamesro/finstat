<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Request\CzDetail;

use Hubipe\FinStat\Enum\ServiceUrl;
use Hubipe\FinStat\Parser\CzDetail\CzDetailParser;
use Hubipe\FinStat\Parser\IParser;
use Hubipe\FinStat\Request\Detail\DetailRequest;


class CzDetailRequest extends DetailRequest
{
	public function getServiceUrl(): ServiceUrl
	{
		$serviceUrl = ServiceUrl::get(ServiceUrl::CZ_DETAIL);
		return $serviceUrl;
	}

	public function getParser(): IParser
	{
		$parser = new CzDetailParser();
		return $parser;
	}

}
