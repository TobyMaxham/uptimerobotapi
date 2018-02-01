# TobyMaxham UptimeRobotAPI

## Installation

```
$ composer install
```

## API documentation

Please see the original API-Documentation [https://uptimerobot.com/api](here) by [Uptimerobot](https://uptimerobot.com).

### Account
```php
// ...
// return the account api
$accountApi = $uptimerobot->account();

// return the Account entity
$account = $accountApi->getAccountDetails();

```


## What is UptimeRobot?
From their site: Everyone with a website knows that, **things can sometimes go wrong**. Sometimes it is with the code, the server or the network....

Uptime Robot is all about helping you to **keep your websites up**.

It **monitors your websites every 5 minutes** and **alerts you if your sites are down** (actually, it is smarter, details below).

## Todo's
- add alternative adapters



