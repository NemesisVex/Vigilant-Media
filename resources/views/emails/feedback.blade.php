{{ $body }}

-----------------------------
@if (!empty($_SERVER['REMOTE_HOST']))
REMOTE_HOST: {{{ $_SERVER['REMOTE_HOST'] }}}
@endif
REMOTE_ADDR: {{{ $_SERVER['REMOTE_ADDR'] }}}
HTTP_USER_AGENT: {{{ $_SERVER['HTTP_USER_AGENT'] }}}