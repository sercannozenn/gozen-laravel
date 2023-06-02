# Projeyi Ayağa Kaldırmak İçin Gerekli Adımlar

- Docker desktop kurulu olmalı<br>
- Projenin yolunda <code>docker-compose up -d</code> komutu çalıştırılarak docker geliştirme ortamı ayağa kaldırılmalı<br>
- docker containerına bağlanılmalı<br>
  - <code>docker ps</code> komutu ile containerlar listelenmeli<br>
  - <code>docker exec -it containerID bash</code> komutu ile container a bağlanmalı<br>
- projenin yoluna gelinmeli ( <code>cd gozen</code>)<br> 
- <code>cp .env.example .env</code> komutu çalıştırılmalı<br>
- <code>php artisan key:generate</code> komutu çalıştırılmalı<br>
- <code>composer install</code> komutu çalıştırılmalı<br>
- <b>docker/nginx/default.conf</b> dosyasında server olarak hangi adres verilmişse bilgisayarın host dosyasında macler için <b>/etc/hosts windows için c:\Windows\System32\Drivers\etc\hosts yolunda 127.0.0.1 gozen.test</b> gibi bir adres verilmeli proje bu adreste çalışacaktır.<br>
- browserdan <code>gozen.test</code> adresini ziyaret edebilirsiniz.<br>
