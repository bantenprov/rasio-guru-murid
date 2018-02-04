# rasio-guru-murid

[![Join the chat at https://gitter.im/rasio-guru-murid-sd-mi/Lobby](https://badges.gitter.im/rasio-guru-murid-sd-mi/Lobby.svg)](https://gitter.im/rasio-guru-murid-sd-mi/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sd-mi/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sd-mi/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sd-mi/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sd-mi/build-status/master)

Rasio Guru-Murid (RGM) SD/MI

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/rasio-guru-murid-sd-mi:dev-master
```
- Latest release:

```bash
$ composer require bantenprov/rasio-guru-murid-sd-mi:v0.1.0
```

## download via github
~~~
bash
$ git clone https://github.com/bantenprov/rasio-guru-murid-sd-mi.git
~~~


#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\RasioGMSdMi\RasioGMSdMiServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rasio-guru-murid-sd-mi-assets
$ php artisan vendor:publish --tag=rasio-guru-murid-sd-mi-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/rasio-guru-murid-sd-mi',
    components: {
      main: resolve => require(['./components/views/bantenprov/rasio-guru-murid-sd-mi/DashboardRasioGMSdMi.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Rasio Guru-Murid (RGM) SD/MI"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/rasio-guru-murid-sd-mi',
      components: {
        main: resolve => require(['./components/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Rasio Guru-Murid (RGM) SD/MI"
      }
    }
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Rasio Guru-Murid (RGM) SD/MI',
          link: '/dashboard/rasio-guru-murid-sd-mi',
          icon: 'fa fa-angle-double-right'
        }
  ]
},

```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import RasioGMSdMi from './components/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMi.chart.vue';
Vue.component('echarts-rasio-guru-murid-sd-mi', RasioGMSdMi);

import RasioGMSdMiKota from './components/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiKota.chart.vue';
Vue.component('echarts-rasio-guru-murid-sd-mi-kota', RasioGMSdMiKota);

import RasioGMSdMiTahun from './components/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiTahun.chart.vue';
Vue.component('echarts-rasio-guru-murid-sd-mi-tahun', RasioGMSdMiTahun);

import RasioGMSdMiAdminShow from './components/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiAdmin.show.vue';
Vue.component('admin-view-rasio-guru-murid-sd-mi-tahun', RasioGMSdMiAdminShow);

//== Echarts Angka Partisipasi Kasar

import RasioGMSdMiBar01 from './components/views/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiBar01.vue';
Vue.component('rasio-guru-murid-sd-mi-bar-01', RasioGMSdMiBar01);

import RasioGMSdMiBar02 from './components/views/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiBar02.vue';
Vue.component('rasio-guru-murid-sd-mi-bar-02', RasioGMSdMiBar02);

//== mini bar charts
import RasioGMSdMiBar03 from './components/views/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiBar03.vue';
Vue.component('rasio-guru-murid-sd-mi-bar-03', RasioGMSdMiBar03);

import RasioGMSdMiPie01 from './components/views/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiPie01.vue';
Vue.component('rasio-guru-murid-sd-mi-pie-01', RasioGMSdMiPie01);

import RasioGMSdMiPie02 from './components/views/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiPie02.vue';
Vue.component('rasio-guru-murid-sd-mi-pie-02', RasioGMSdMiPie02);

//== mini pie charts
import RasioGMSdMiPie03 from './components/views/bantenprov/rasio-guru-murid-sd-mi/RasioGMSdMiPie03.vue';
Vue.component('rasio-guru-murid-sd-mi-pie-03', RasioGMSdMiPie03);
```
