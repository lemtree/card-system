<?php
class AlipayUserAccountSearchRequest { private $endTime; private $fields; private $pageNo; private $pageSize; private $startTime; private $type; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setEndTime($sp7f795f) { $this->endTime = $sp7f795f; $this->apiParas['end_time'] = $sp7f795f; } public function getEndTime() { return $this->endTime; } public function setFields($spa456fc) { $this->fields = $spa456fc; $this->apiParas['fields'] = $spa456fc; } public function getFields() { return $this->fields; } public function setPageNo($sp660b9e) { $this->pageNo = $sp660b9e; $this->apiParas['page_no'] = $sp660b9e; } public function getPageNo() { return $this->pageNo; } public function setPageSize($spaba533) { $this->pageSize = $spaba533; $this->apiParas['page_size'] = $spaba533; } public function getPageSize() { return $this->pageSize; } public function setStartTime($sp2bc7a6) { $this->startTime = $sp2bc7a6; $this->apiParas['start_time'] = $sp2bc7a6; } public function getStartTime() { return $this->startTime; } public function setType($sp9d3dc0) { $this->type = $sp9d3dc0; $this->apiParas['type'] = $sp9d3dc0; } public function getType() { return $this->type; } public function getApiMethodName() { return 'alipay.user.account.search'; } public function setNotifyUrl($sp9f70c8) { $this->notifyUrl = $sp9f70c8; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16ae99) { $this->returnUrl = $sp16ae99; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp3fbe16) { $this->terminalType = $sp3fbe16; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp130e84) { $this->terminalInfo = $sp130e84; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp031480) { $this->prodCode = $sp031480; } public function setApiVersion($spad1878) { $this->apiVersion = $spad1878; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp6c9cdb) { $this->needEncrypt = $sp6c9cdb; } public function getNeedEncrypt() { return $this->needEncrypt; } }