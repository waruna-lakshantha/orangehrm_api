<?php
// auto-generated by sfRoutingConfigHandler
// date: 2023/01/27 14:17:26
$this->routes['api_user'] = unserialize('C:15:"sfDoctrineRoute":2266:{a:11:{i:0;a:12:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:3:"api";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:6:":token";i:3;s:5:"token";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:10:":user_name";i:3;s:9:"user_name";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:9:":password";i:3;s:8:"password";}i:8;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:9;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"auth";i:3;N;}i:10;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:".";i:3;N;}i:11;a:4:{i:0;s:8:"variable";i:1;s:1:".";i:2;s:10:":sf_format";i:3;s:9:"sf_format";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:18:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:5:"model";s:4:"User";s:4:"type";s:4:"list";s:6:"method";s:11:"getForToken";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:48:"/api/:token/:user_name/:password/auth.:sf_format";i:4;s:4:"/api";i:5;s:112:"#^/api/(?P<token>[^/\\.]+)/(?P<user_name>[^/\\.]+)/(?P<password>[^/\\.]+)/auth\\.(?P<sf_format>(?:xml|json|yaml))$#x";i:6;a:4:{s:5:"token";s:6:":token";s:9:"user_name";s:10:":user_name";s:8:"password";s:9:":password";s:9:"sf_format";s:10:":sf_format";}i:7;a:2:{s:6:"module";s:3:"api";s:6:"action";s:4:"auth";}i:8;a:5:{s:9:"sf_format";s:17:"(?:xml|json|yaml)";s:9:"sf_method";a:1:{i:0;s:4:"post";}s:5:"token";s:7:"[^/\\.]+";s:9:"user_name";s:7:"[^/\\.]+";s:8:"password";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1065:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:3:"api";s:6:"action";s:5:"index";}i:8;a:0:{}i:9;s:1:"/";i:10;b:0;}}');
$this->routes['default_index'] = unserialize('C:7:"sfRoute":1144:{a:11:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":module";i:3;s:6:"module";}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:8:"/:module";i:4;s:0:"";i:5;s:25:"#^/(?P<module>[^/\\.]+)$#x";i:6;a:1:{s:6:"module";s:7:":module";}i:7;a:1:{s:6:"action";s:5:"index";}i:8;a:1:{s:6:"module";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
$this->routes['default'] = unserialize('C:7:"sfRoute":1477:{a:11:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":module";i:3;s:6:"module";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":action";i:3;s:6:"action";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:1:"*";i:3;N;}}i:1;a:8:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:2:{i:0;s:1:"/";i:1;s:1:".";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:1:"1";s:7:"logging";s:1:"1";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:8:"(?:/|\\.)";s:22:"variable_content_regex";s:7:"[^/\\.]+";}i:3;s:18:"/:module/:action/*";i:4;s:0:"";i:5;s:69:"#^/(?P<module>[^/\\.]+)/(?P<action>[^/\\.]+)(?:(?:/(?P<_star>.*))?)?$#x";i:6;a:2:{s:6:"module";s:7:":module";s:6:"action";s:7:":action";}i:7;a:0:{}i:8;a:2:{s:6:"module";s:7:"[^/\\.]+";s:6:"action";s:7:"[^/\\.]+";}i:9;s:0:"";i:10;b:0;}}');
