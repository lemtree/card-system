<?php
class AlipayZdataserviceUnidataQueryRequest { private $queryCondition; private $uniqKey; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setQueryCondition($sp041643) { $this->queryCondition = $sp041643; $this->apiParas['query_condition'] = $sp041643; } public function getQueryCondition() { return $this->queryCondition; } public function setUniqKey($sp6a7924) { $this->uniqKey = $sp6a7924; $this->apiParas['uniq_key'] = $sp6a7924; } public function getUniqKey() { return $this->uniqKey; } public function getApiMethodName() { return 'alipay.zdataservice.unidata.query'; } public function setNotifyUrl($sp9f70c8) { $this->notifyUrl = $sp9f70c8; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16ae99) { $this->returnUrl = $sp16ae99; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp3fbe16) { $this->terminalType = $sp3fbe16; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp130e84) { $this->terminalInfo = $sp130e84; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp031480) { $this->prodCode = $sp031480; } public function setApiVersion($spad1878) { $this->apiVersion = $spad1878; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp6c9cdb) { $this->needEncrypt = $sp6c9cdb; } public function getNeedEncrypt() { return $this->needEncrypt; } }