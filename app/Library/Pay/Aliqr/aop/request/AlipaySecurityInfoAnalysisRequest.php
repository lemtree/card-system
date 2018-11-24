<?php
class AlipaySecurityInfoAnalysisRequest { private $envClientBaseBand; private $envClientBaseStation; private $envClientCoordinates; private $envClientImei; private $envClientImsi; private $envClientIosUdid; private $envClientIp; private $envClientMac; private $envClientScreen; private $envClientUuid; private $jsTokenId; private $partnerId; private $sceneCode; private $userAccountNo; private $userBindBankcard; private $userBindBankcardType; private $userBindMobile; private $userIdentityType; private $userRealName; private $userRegDate; private $userRegEmail; private $userRegMobile; private $userrIdentityNo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setEnvClientBaseBand($sp9d931a) { $this->envClientBaseBand = $sp9d931a; $this->apiParas['env_client_base_band'] = $sp9d931a; } public function getEnvClientBaseBand() { return $this->envClientBaseBand; } public function setEnvClientBaseStation($spaf07dd) { $this->envClientBaseStation = $spaf07dd; $this->apiParas['env_client_base_station'] = $spaf07dd; } public function getEnvClientBaseStation() { return $this->envClientBaseStation; } public function setEnvClientCoordinates($sp567100) { $this->envClientCoordinates = $sp567100; $this->apiParas['env_client_coordinates'] = $sp567100; } public function getEnvClientCoordinates() { return $this->envClientCoordinates; } public function setEnvClientImei($sp858c2e) { $this->envClientImei = $sp858c2e; $this->apiParas['env_client_imei'] = $sp858c2e; } public function getEnvClientImei() { return $this->envClientImei; } public function setEnvClientImsi($sp959ca0) { $this->envClientImsi = $sp959ca0; $this->apiParas['env_client_imsi'] = $sp959ca0; } public function getEnvClientImsi() { return $this->envClientImsi; } public function setEnvClientIosUdid($sp146bf0) { $this->envClientIosUdid = $sp146bf0; $this->apiParas['env_client_ios_udid'] = $sp146bf0; } public function getEnvClientIosUdid() { return $this->envClientIosUdid; } public function setEnvClientIp($sp2df32f) { $this->envClientIp = $sp2df32f; $this->apiParas['env_client_ip'] = $sp2df32f; } public function getEnvClientIp() { return $this->envClientIp; } public function setEnvClientMac($spdf8a0a) { $this->envClientMac = $spdf8a0a; $this->apiParas['env_client_mac'] = $spdf8a0a; } public function getEnvClientMac() { return $this->envClientMac; } public function setEnvClientScreen($spbae360) { $this->envClientScreen = $spbae360; $this->apiParas['env_client_screen'] = $spbae360; } public function getEnvClientScreen() { return $this->envClientScreen; } public function setEnvClientUuid($sp8828ca) { $this->envClientUuid = $sp8828ca; $this->apiParas['env_client_uuid'] = $sp8828ca; } public function getEnvClientUuid() { return $this->envClientUuid; } public function setJsTokenId($spbe32a5) { $this->jsTokenId = $spbe32a5; $this->apiParas['js_token_id'] = $spbe32a5; } public function getJsTokenId() { return $this->jsTokenId; } public function setPartnerId($spf17bce) { $this->partnerId = $spf17bce; $this->apiParas['partner_id'] = $spf17bce; } public function getPartnerId() { return $this->partnerId; } public function setSceneCode($spb411c0) { $this->sceneCode = $spb411c0; $this->apiParas['scene_code'] = $spb411c0; } public function getSceneCode() { return $this->sceneCode; } public function setUserAccountNo($sp2fdc55) { $this->userAccountNo = $sp2fdc55; $this->apiParas['user_account_no'] = $sp2fdc55; } public function getUserAccountNo() { return $this->userAccountNo; } public function setUserBindBankcard($spa15a5f) { $this->userBindBankcard = $spa15a5f; $this->apiParas['user_bind_bankcard'] = $spa15a5f; } public function getUserBindBankcard() { return $this->userBindBankcard; } public function setUserBindBankcardType($spf91237) { $this->userBindBankcardType = $spf91237; $this->apiParas['user_bind_bankcard_type'] = $spf91237; } public function getUserBindBankcardType() { return $this->userBindBankcardType; } public function setUserBindMobile($spe5a5ca) { $this->userBindMobile = $spe5a5ca; $this->apiParas['user_bind_mobile'] = $spe5a5ca; } public function getUserBindMobile() { return $this->userBindMobile; } public function setUserIdentityType($sp1ab6e1) { $this->userIdentityType = $sp1ab6e1; $this->apiParas['user_identity_type'] = $sp1ab6e1; } public function getUserIdentityType() { return $this->userIdentityType; } public function setUserRealName($spc712ed) { $this->userRealName = $spc712ed; $this->apiParas['user_real_name'] = $spc712ed; } public function getUserRealName() { return $this->userRealName; } public function setUserRegDate($sp9e0967) { $this->userRegDate = $sp9e0967; $this->apiParas['user_reg_date'] = $sp9e0967; } public function getUserRegDate() { return $this->userRegDate; } public function setUserRegEmail($sp257cc8) { $this->userRegEmail = $sp257cc8; $this->apiParas['user_reg_email'] = $sp257cc8; } public function getUserRegEmail() { return $this->userRegEmail; } public function setUserRegMobile($sp923279) { $this->userRegMobile = $sp923279; $this->apiParas['user_reg_mobile'] = $sp923279; } public function getUserRegMobile() { return $this->userRegMobile; } public function setUserrIdentityNo($spd77605) { $this->userrIdentityNo = $spd77605; $this->apiParas['userr_identity_no'] = $spd77605; } public function getUserrIdentityNo() { return $this->userrIdentityNo; } public function getApiMethodName() { return 'alipay.security.info.analysis'; } public function setNotifyUrl($sp9f70c8) { $this->notifyUrl = $sp9f70c8; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp16ae99) { $this->returnUrl = $sp16ae99; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp3fbe16) { $this->terminalType = $sp3fbe16; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($sp130e84) { $this->terminalInfo = $sp130e84; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp031480) { $this->prodCode = $sp031480; } public function setApiVersion($spad1878) { $this->apiVersion = $spad1878; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp6c9cdb) { $this->needEncrypt = $sp6c9cdb; } public function getNeedEncrypt() { return $this->needEncrypt; } }