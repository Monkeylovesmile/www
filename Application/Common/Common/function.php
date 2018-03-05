<?php
/**
 * 公用的方法
 * @param  [type] $status  状态   0：失败  1：成功
 * @param  [type] $message 提示语句
 * @param  [type] $data    [description]
 * @return [type]          [description]
 */
function show($status,$message,$data = array()){
  $result = array(
    'status' => $status,
    'message' => $message,
    'data' => $data,
  );
  exit(json_encode($result));
}
/**
 * 密码md5加密
 * @param  [type] $password 密码
 * @return [type]           [description]
 */
function getMd5Password($password){
  return md5($password.C('MD5_PRE'));
}
