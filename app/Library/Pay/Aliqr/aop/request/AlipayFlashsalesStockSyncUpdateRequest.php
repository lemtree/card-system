<?php
class AlipayFlashsalesStockSyncUpdateRequest { private $outProductId; private $publicId; private $stock; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setOutProductId($sp984102) { $this->outProductId = $sp984102; $this->apiParas['out_product_id'] = $sp984102; } public function getOutProductId() { return $this->outProductId; } public function setPublicId($spda0b49) { $this->publicId = $spda0b49; $this->apiParas['public_id'] = $spda0b49; } public function getPublicId() { return $this->publicId; } public function setStock($sp227077) { $this->stock = $sp227077; $this->apiParas['stock'] = $sp227077; } public function getStock() { return $this->stock; } public function getApiMethodName() { return 'alipay.flashsales.stock.sync.update'; } public function setNotifyUrl($sp9f70c8) { $this->notifyUrl = $sp9f70c8; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16ae99) { $this->returnUrl = $sp16ae99; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp3fbe16) { $this->terminalType = $sp3fbe16; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp130e84) { $this->terminalInfo = $sp130e84; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp031480) { $this->prodCode = $sp031480; } public function setApiVersion($spad1878) { $this->apiVersion = $spad1878; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp6c9cdb) { $this->needEncrypt = $sp6c9cdb; } public function getNeedEncrypt() { return $this->needEncrypt; } }