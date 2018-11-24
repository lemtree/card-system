<?php
class AlipayMemberCardOpenRequest { private $bizSerialNo; private $cardMerchantInfo; private $cardUserInfo; private $extInfo; private $externalCardNo; private $requestFrom; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setBizSerialNo($sp89469d) { $this->bizSerialNo = $sp89469d; $this->apiParas['biz_serial_no'] = $sp89469d; } public function getBizSerialNo() { return $this->bizSerialNo; } public function setCardMerchantInfo($spdccfa5) { $this->cardMerchantInfo = $spdccfa5; $this->apiParas['card_merchant_info'] = $spdccfa5; } public function getCardMerchantInfo() { return $this->cardMerchantInfo; } public function setCardUserInfo($sp0efa83) { $this->cardUserInfo = $sp0efa83; $this->apiParas['card_user_info'] = $sp0efa83; } public function getCardUserInfo() { return $this->cardUserInfo; } public function setExtInfo($spc31c74) { $this->extInfo = $spc31c74; $this->apiParas['ext_info'] = $spc31c74; } public function getExtInfo() { return $this->extInfo; } public function setExternalCardNo($spa6fa99) { $this->externalCardNo = $spa6fa99; $this->apiParas['external_card_no'] = $spa6fa99; } public function getExternalCardNo() { return $this->externalCardNo; } public function setRequestFrom($spe2756c) { $this->requestFrom = $spe2756c; $this->apiParas['request_from'] = $spe2756c; } public function getRequestFrom() { return $this->requestFrom; } public function getApiMethodName() { return 'alipay.member.card.open'; } public function setNotifyUrl($sp9f70c8) { $this->notifyUrl = $sp9f70c8; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16ae99) { $this->returnUrl = $sp16ae99; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp3fbe16) { $this->terminalType = $sp3fbe16; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp130e84) { $this->terminalInfo = $sp130e84; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp031480) { $this->prodCode = $sp031480; } public function setApiVersion($spad1878) { $this->apiVersion = $spad1878; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp6c9cdb) { $this->needEncrypt = $sp6c9cdb; } public function getNeedEncrypt() { return $this->needEncrypt; } }