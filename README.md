# Prima parte Progetto Finale

Creo un nuovo progetto laravel attraverso il comando 

> laravel new Progetto_finale

Inizio ad installare parte delle dipendenze base che mi serviranno:

> composer install

> npm install

> npm install bootstrap

> npm install bootstrap-icons

Creo il mio database attraverso i comandi:

> winpty mysql -u root -p

Prima controllo quali database sono presenti:

> show databases;

Adesso creo il mio database:

> create databese presto;

Mi assicuro di averlo creato correttamente eseguendo di nuovo il comando `show databases;`

Esco dal CMD:

> quit

Adesso collego il mio db al mio progetto laravel nel .env

Setto TablePlus per poter vedere il mio database più comodamente

Eseguo la prima migrazione:

> php artisan migrate

Per sicurezza eseguo anche una rollback 

> php artisan migrate:rollback

## IMPLEMENTO L'AUTENTICAZIONE NEL PROGETTO 
(https://laravel.com/docs/11.x/fortify#installation)

Installo il pacchetto Fortify:

> composer require laravel/fortify

Pubblico i file necessari per la configurazione e al corretto funzionamento di fortify:

> php artisan fortify:install

Questo comando pubblicherà le azioni di Fortify nella mia `app/Actionsdirectory`, che verrà creata se non esiste. Inoltre, il `FortifyServiceProviderfile` di configurazione e tutte le migrazioni necessarie del database saranno pubblicate.

Eseguo un altra migrazione:

> php artisan migrate

Modifico il file di configurazione fortify.php lasciando decommentate solo queste righe: 

```
 'features' => [
  Features::registration(),
  Features::resetPasswords(),
  Features::emailVerification(),
],
```
Adesso setto il mio progetto per la login.
Mi sposto nel file `FortifyServiceProviderfile` e aggiungo nella funzione `boot` il seguente codice:

```
Fortify::loginView(function () {
        return view('auth.login');
    });
```
Faccio lo stesso per la registrazione:

```
 Fortify::registerView(function () {
        return view('auth.register');
    });
```

Adesso creo le viste `login` e `register` in `resources/views/auth`
