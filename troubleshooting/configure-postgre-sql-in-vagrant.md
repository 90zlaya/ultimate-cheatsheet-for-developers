# Configure PostgreSQL in Vagrant

> How to configure PostgreSQL in Vagrant.

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Solution

### Configure Postgres

* Update **pg_hba.conf** (most likely in **/etc/postgresql/9.4/main**) with -
    * `host all all 0.0.0.0/0 trust`
* Update **postgresql.conf** to use `listen_addresses = '*'`
* Be sure to `sudo service postgresql restart`

### Configure Vagrant

* Add `config.vm.network :forwarded_port, host: 5432, guest: 5432` to the `Vagrant.configure` block in your **Vagrantfile**.

### Test your connection

* Attempt to connect from your host using `psql -h localhost -U vagrant`