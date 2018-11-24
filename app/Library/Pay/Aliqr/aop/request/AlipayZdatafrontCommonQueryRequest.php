<?php
class AlipayZdatafrontCommonQueryRequest { private $cacheInterval; private $queryConditions; private $serviceName; private $visitBiz; private $visitBizLine; private $visitDomain; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setCacheInterval($sp8963e6) { $this->cacheInterval = $sp8963e6; $this->apiParas['cache_interval'] = $sp8963e6; } public function getCacheInterval() { return $this->cacheInterval; } public function setQueryConditions($sp2bd038) { $this->queryConditions = $sp2bd038; $this->apiParas['query_conditions'] = $sp2bd038; } public function getQueryConditions() { return $this->queryConditions; } public function setServiceName($spa25d97) { $this->serviceName = $spa25d97; $this->apiParas['service_name'] = $spa25d97; } public function getServiceName() { return $this->serviceName; } public function setVisitBiz($spf7c355) { $this->visitBiz = $spf7c355; $this->apiParas['visit_biz'] = $spf7c355; } public function getVisitBiz() { return $this->visitBiz; } public function setVisitBizLine($sp3e3893) { $this->visitBizLine = $sp3e3893; $this->apiParas['visit_biz_line'] = $sp3e3893; } public function getVisitBizLine() { return $this->visitBizLine; } public function setVisitDomain($sp3101ed) { $this->visitDomain = $sp3101ed; $this->apiParas['visit_domain'] = $sp3101ed; } public function getVisitDomain() { return $this->visitDomain; } public function getApiMethodName() { return 'alipay.zdatafront.common.query'; } public function setNotifyUrl($sp9f70c8) { $this->notifyUrl = $sp9f70c8; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16ae99) { $this->returnUrl = $sp16ae99; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp3fbe16) { $this->terminalType = $sp3fbe16; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp130e84) { $this->terminalInfo = $sp130e84; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp031480) { $this->prodCode = $sp031480; } public function setApiVersion($spad1878) { $this->apiVersion = $spad1878; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp6c9cdb) { $this->needEncrypt = $sp6c9cdb; } public function getNeedEncrypt() { return $this->needEncrypt; } }