<?php
class AlipayMappprodAccountBindingSyncRequest { private $extInfo; private $userAccountNo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setExtInfo($spc31c74) { $this->extInfo = $spc31c74; $this->apiParas['ext_info'] = $spc31c74; } public function getExtInfo() { return $this->extInfo; } public function setUserAccountNo($sp2fdc55) { $this->userAccountNo = $sp2fdc55; $this->apiParas['user_account_no'] = $sp2fdc55; } public function getUserAccountNo() { return $this->userAccountNo; } public function getApiMethodName() { return 'alipay.mappprod.account.binding.sync'; } public function setNotifyUrl($sp9f70c8) { $this->notifyUrl = $sp9f70c8; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16ae99) { $this->returnUrl = $sp16ae99; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp3fbe16) { $this->terminalType = $sp3fbe16; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp130e84) { $this->terminalInfo = $sp130e84; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp031480) { $this->prodCode = $sp031480; } public function setApiVersion($spad1878) { $this->apiVersion = $spad1878; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp6c9cdb) { $this->needEncrypt = $sp6c9cdb; } public function getNeedEncrypt() { return $this->needEncrypt; } }