nginx.conf

```
http {
		...
        ##buffer policy
        client_body_buffer_size 32K;
        client_header_buffer_size 8k;
        client_max_body_size 10480k;
        large_client_header_buffers 2 1k;
        ##end buffer policy

        more_set_headers 'Server: ';
#....
        #ssl_protocols TLSv1 TLSv1.1 TLSv1.2 TLSv1.3; # Dropping SSLv3, ref: POODLE
		#Remove old ssl types
        ssl_protocols TLSv1.2 TLSv1.3; # Dropping SSLv3, ref: POODLE
        ssl_prefer_server_ciphers on;


		ssl_ciphers	"HIGH:EECDH+AESGCM:EDH+AESGCM:AES256+EECDH:AES256+EDH:!aNULL:!MD5:!RC4";  
```


