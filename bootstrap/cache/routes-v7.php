<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BKv4w6g2NtEMf5U7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/password/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uEcJ4lvi0h5QkGbF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8koEWazX1jmQSE4p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getAccessToken' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfEs4s5R00IcrwNr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dashboard_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CoEAEzPPbaX5kY0E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/retrieve-customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zVSJK48S3qbFej21',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update-customer-stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zYb7OkO7O3i12kjA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clear_cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::olH5s16FJaSFJG6y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r9dpbuD4cHgmjPGp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/client_sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kSD2kBzfESkbWxSf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/client_payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3ziw4jR3DLhZh6oc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/client_quotations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::16OVUytSzki23SX6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/client_returns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oNN5M1gbxBaT9ESO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FIWyvUFT6pLdicfb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/provider_purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::crDKbeROhJzq4xu9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/provider_payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZCjsqEGiuRPj1k1G',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/provider_returns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5odapwC5y7XhuAL8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rCMpF0MgLDFObaCq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AhcsTsl00NTWA5xv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_last_sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jGORMnDofeve5m8i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/stock_alert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UU2U8qKH9yD2xjl8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/payment_chart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OFiPuP3Pq8Lb3mVU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/warehouse_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xx9IUEu2bBjjRurC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/sales_warehouse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2c8Jc8THhDOPtUCN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/quotations_warehouse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vc90XDgdR3Hf7Xt6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/returns_sale_warehouse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2nHyyg6EKPtigjfS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/returns_purchase_warehouse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aZybWpFN4Sh3Zn9P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/expenses_warehouse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wMkdCC3Y9skRKS8f',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/warhouse_count_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ol8pztSuquJTbpH8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/report_today' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N7oy3gOKeeVMJzxD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/count_quantity_alert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9otevG5yDC0YnG9i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/profit_and_loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yc7kPfaQjDeBG3Kx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/report_dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8NceDgAyC76PIZBe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/top_products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0UmOvJdCQCGe7bCD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/top_customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::whhBMzyKh87nW6SG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/product_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QNJXsx1bl0L5Gfpv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/sale_products_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m6Cyf0gWXdyFjwqm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/product_sales_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OAta1APzgDo3gOsl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/product_purchases_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IMxpopkj7TX2iVyP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rDuQrt5770zyMLfr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uDJZHgXyihIanQgo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_sales_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fWldRbOCzOd2ihgt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_quotations_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5RLPA1UlBtuJdUre',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_sales_return_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z8dPPxxcbjjjQtzV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_purchases_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o4rckaW76HihZjzG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_purchase_return_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MqdzvYRShkSAWNWT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_transfer_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::INmUQsnWMDBF6O9e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_adjustment_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i697sufz9ezhytJg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_sales_by_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJ2pLelnZm9feZxM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_quotations_by_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l3hA2yuHfcIPxUvA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_sales_return_by_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3fbdUBuhwAlT1Y0C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_purchases_by_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5YTPNZP4Mqd8JBfL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_purchase_return_by_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lJHfW6QqSAkhUdXT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_transfer_by_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4rvNWnVFOsuGJiws',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/get_adjustment_by_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3pQ7CQ1Lb1c7Bpjx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/inventory_valuation_summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nu08KDRJHucpeHZa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/expenses_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L64dYrV44vkhIf1j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/report/deposits_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UviaoFX7QlgiKntS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employees.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/employees/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/employees/import/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::alsOLWbBcoGXpPoq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/employees/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wb3Nxpxmr72DbCrt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_employees_by_department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zb6OtvUZaBsbJm3a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_experiences_by_employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QxhycaV7qYg2M9Tf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_accounts_by_employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pCrHxP92bLqyJmiS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/Get_employees_by_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hUCLFbZtSsVzyu2b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/work_experience' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'work_experience.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'work_experience.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/work_experience/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'work_experience.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/employee_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_account.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee_account.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/employee_account/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_account.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/company/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_all_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mf1CWsuR3tqVJiGo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/company/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KH4ROWJfjybOR1a0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'departments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/departments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_all_departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItgCLW6eeVaprvUp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_departments_by_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Get_departments_by_company',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/departments/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6U2t9HgM7rrykADL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/designations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'designations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/designations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_designations_by_department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e64MM4GJNOdGF0RJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/designations/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UxwMslCMlmdmFXBZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/office_shift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_shift.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'office_shift.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/office_shift/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_shift.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/office_shift/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dulu60J65ojUKePt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/attendances' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendances.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attendances.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/attendances/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendances.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/daily_attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'daily_attendance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/attendances/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CQc4JPrZA6pJpm2F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'leave.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/leave/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/leave_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave_type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'leave_type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/leave_type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave_type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/leave/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jFYw8ogsyBrD9Aes',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/leave_type/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::van6jFl1ZeVhVFrR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/holiday' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holiday.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'holiday.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/holiday/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holiday.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/holiday/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FNJaPdS8NPLPXZY9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payroll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payroll/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/core/get_departments_by_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XeWmRDR6NHr5NAgr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/core/get_designations_by_department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4TzojASbEGuHUDaB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/core/get_office_shift_by_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bEg4vj9XRxbxkE9R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/core/get_employees_by_company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2SEVPzybFTTYzYsd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients/import/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dx2rtfW02p7bECu3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_clients_without_paginate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GQsg4Q5uCJ5HseEi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BH3MdO3NbnIAEEYa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients_pay_due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IOPqnSO4oFjdPTbw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients_pay_return_due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fws4507e6m5kg5iE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients_without_ecommerce' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients_without_ecommerce.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'clients_without_ecommerce.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clients_without_ecommerce/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients_without_ecommerce.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/providers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'providers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/providers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/providers/import/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tM1F157CvoMblLD4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/providers/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mWhZGJnxnYiBtj92',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pay_supplier_due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f6uYTYFDnpR9JYZy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pay_purchase_return_due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9dXUsthciLy8XVY8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pos/create_pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SXG3qsWvHo27uNds',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pos/get_products_pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IfvVAvvr9zybbz2S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pos/data_create_pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aHk7m3gJCjEQfbf9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pos/create_draft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UvOTejEURncjdVwQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_draft_sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PJVZj8yk3506PSdV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pos/submit_sale_from_draft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9hXADs9Y5EMRHfsg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'projects.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/projects/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/projects/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MLcTWwlBe10ePULq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/project_discussions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jI02pfwmhZFuXA22',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/project_issues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::16KpKCHfmXDrlZBw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/project_documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LPjNyWUoUMf710X3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tasks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tasks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tasks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tasks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tasks/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pnTa1Cp0U5sMXbI6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tasks_kanban' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tasks_kanban',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/task_change_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task_change_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/task_discussions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4WLT0dZxtHdSSx3w',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/task_documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VnFkdgt6ku0KLhfS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products/import/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K9wVrqmliCTawkDF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_products_stock_alerts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7H0mTZJmWiOZ6dt9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/barcode_create_page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2HDIWV73288ChVFl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ia2F1vMdTcDaiHRl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_products_materiels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get_products_materiels',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/count_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wfVkifdz6eN7lu5g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store_count_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9lBla3uXFqA7F4o5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vmW5LVbhBPwpANUw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'units.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/units/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_sub_units_by_base' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RUHeDCaMM1GFKXDk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rQCp0wRdbaT7JIC0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brands.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/brands/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jd73ZmgnN4ZHBGt6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/currencies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/currencies/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nnn3tbGpxWvY2Sn7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/warehouses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/warehouses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/warehouses/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PWzMT3fwITyYe9el',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/purchases/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/purchase_send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BlfFizEeMwVDr2TG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/purchase_send_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JHQutq8B2IUObp0N',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/purchases_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GBgIAeHA8jfEMTav',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/purchase_send_whatsapp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ie32ThPZbRtCASV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_import_purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rIW30KeHjCchMmnu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store_import_purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NMctwSo43YCzB1Qt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_purchase.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_purchase/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_purchase.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_purchase_get_number' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XX16kY4bHcRLCMur',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_purchase_send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CgR0Ly5w9n640LjN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_purchase_send_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fpdNLObkrVxlpm0d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sales_send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6d3oCElSTzt1LdSe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sales_send_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BDPL2N9c8fcQj0Zq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sales_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tZ9U1sNg14aRtbsi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sales_send_whatsapp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QCeQhmznk5Ak5ZC8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_today_sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Aacl72E5Aa32dqBR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shipments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_sale.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment_sale.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_sale/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_sale.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_sale_get_number' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m879g8WnhjWW7sfQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_sale_send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2x49cvzAb7tqvUZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_sale_send_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aOt4HoIWxECLgpPE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/expenses_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VmWwoLq5n3NwUeWI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/expenses_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses_category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expenses_category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/expenses_category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses_category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/expenses_category_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nHDgwMLtDyeLOIUG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/accounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/accounts_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3AAUDSWYs1peeWV0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/transfer_money' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer_money.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transfer_money.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/transfer_money/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer_money.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deposits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deposits.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deposits/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deposits_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QCY4eXGtnMTs9hgp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deposits_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits_category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deposits_category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deposits_category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits_category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deposits_category_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IDdhW0WgzSStPG22',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quotations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quotations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quotations_send_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ypOa7KTTmT21NFBn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quotations_send_sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1mnz92aSYxjMgKYj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quotations_delete_by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PmMLI7WErx61lKGv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quotation_send_whatsapp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CwkOWsOibRYlRN2W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sale.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/sale/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/sale/send/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6sl6icX3AsfLuc0R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/sale/send/sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sjkwRT0lzrUU7mJg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/sale/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NyQ6SRpjSiqEbHvv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/purchase/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/purchase/send/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k7halpmnCTghRZlc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/purchase/send/sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B4nyrxTWsbd81YAt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/returns/purchase/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ipXQpFFZdGC10WyH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_sale.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'returns_sale.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_sale/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_sale.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_sale/Number/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YACkFkA8UlsbBaQ3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_sale/send/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gItNDfxhxCRb1p2p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_sale/send/sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v5j8mX9L1kftVWx8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_purchase.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'returns_purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_purchase/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_purchase.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_purchase/Number/Order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LZsLgTZcAFqIrfD7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_purchase/send/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uR3fuYAeoEITH3cT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/returns_purchase/send/sms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::weLrQig9Udv8XATw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adjustments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adjustments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adjustments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adjustments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adjustments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adjustments/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cqWTtSllBC5dqfoT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/transfers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/transfers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/transfers/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oybpdWdz1234eDzv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_user_auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EKi1WCEH3V21VK0D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/Get_user_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::evbwFdNBTgAxqsRb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/roles/check/create_page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_page.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'create_page.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/roles/check/create_page/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_page.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/roles/delete/by_selection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hrsflaREaaRA1n58',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_Settings_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::icCW7uXTHj3sZlYd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_pos_Settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LhjLxIsvBNidrSIT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_config_mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PCBWNeAslNOtUcSv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_sms_config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kSNpaVBG2huOHGoI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_twilio_config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XhAXMVTH8z4RS6XB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_nexmo_config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z8bkW8546HehIAuL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_infobip_config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::saoF958YN1lztDNY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_Default_SMS' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sEQlYPcNQR0c4AMb',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_sms_template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y2CNGiD2rIuqEd9F',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_sms_body' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6EiR825D7ME20fbi',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_emails_template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bi3Y4rDnItJh36fI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_custom_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hmqRKsb2d2EGKM34',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v70U2gX1A8l0jrsC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_payment_gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xzT6LaN3qN2BVAD3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_version_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mM0iNg1q3PVHAbAd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4B7XrmhVthoReyku',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/generate_new_backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SX0GMkRPQPLA3kz2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_modules_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bZ0RLXKKYGh8qbFv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/update_status_module' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YrEiIZRGI9clN5or',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/upload_module' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I21wOMnvXfUxeTCa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItswEHyaQ7puhOn4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::anq6GW71JU0D23r3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::snhQiCMQPcOsztzt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/finish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2qxUxeUojQ7EcWng',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/lastStep' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_lastStep',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|r(?|e(?|port/(?|client(?|/([^/]++)(*:149)|_pdf/([^/]++)(*:170))|provider(?|/([^/]++)(*:199)|_pdf/([^/]++)(*:220)))|move_draft_sale/([^/]++)(*:254)|turn(?|s/(?|sale/(?|([^/]++)(?|(*:293)|/edit(*:306)|(*:314))|payment/([^/]++)(*:339)|create_sell_return/([^/]++)(*:374)|edit_sell_return/([^/]++)/([^/]++)(*:416))|purchase/(?|([^/]++)(?|(*:448)|/edit(*:461)|(*:469))|payment/([^/]++)(*:494)|create_purchase_return/([^/]++)(*:533)|edit_purchase_return/([^/]++)/([^/]++)(*:579)))|_(?|sale_pdf/([^/]++)(*:610)|purchase_pdf/([^/]++)(*:639))))|oles/(?|([^/]++)(?|(*:669)|/edit(*:682)|(*:690))|check/create_page/([^/]++)(?|(*:728)|/edit(*:741)|(*:749))))|e(?|mployee(?|s/([^/]++)(?|(*:787)|/edit(*:800)|(*:808))|_account/([^/]++)(?|(*:837)|/edit(*:850)|(*:858)))|xpenses(?|/([^/]++)(?|(*:890)|/edit(*:903)|(*:911))|_category/([^/]++)(?|(*:941)|/edit(*:954)|(*:962))))|u(?|pdate_(?|social_profile/([^/]++)(*:1009)|task_status/([^/]++)(*:1038)|user_profile/([^/]++)(*:1068)|config_mail/([^/]++)(*:1097))|nits/([^/]++)(?|(*:1123)|/edit(*:1137)|(*:1146))|sers(?|/([^/]++)(?|(*:1175)|/edit(*:1189)|(*:1198))|_switch_activated/([^/]++)(*:1234)))|w(?|ork_experience/([^/]++)(?|(*:1275)|/edit(*:1289)|(*:1298))|arehouses/([^/]++)(?|(*:1329)|/edit(*:1343)|(*:1352)))|c(?|o(?|mpany/([^/]++)(?|(*:1388)|/edit(*:1402)|(*:1411))|nvert_to_sale_data/([^/]++)(*:1448))|lients(?|/([^/]++)(?|(*:1479)|/edit(*:1493)|(*:1502))|_without_ecommerce/([^/]++)(?|(*:1542)|/edit(*:1556)|(*:1565)))|ategories/([^/]++)(?|(*:1597)|/edit(*:1611)|(*:1620))|urrencies/([^/]++)(?|(*:1651)|/edit(*:1665)|(*:1674)))|de(?|p(?|artments/([^/]++)(?|(*:1714)|/edit(*:1728)|(*:1737))|osits(?|/([^/]++)(?|(*:1767)|/edit(*:1781)|(*:1790))|_category/([^/]++)(?|(*:1821)|/edit(*:1835)|(*:1844))))|signations/([^/]++)(?|(*:1878)|/edit(*:1892)|(*:1901))|lete_backup/([^/]++)(*:1931))|office_shift/([^/]++)(?|(*:1965)|/edit(*:1979)|(*:1988))|a(?|ttendance(?|s/([^/]++)(?|(*:2027)|/edit(*:2041)|(*:2050))|_by_employee/([^/]++)(*:2081))|ccounts/([^/]++)(?|(*:2110)|/edit(*:2124)|(*:2133))|djustments/(?|([^/]++)(?|(*:2168)|/edit(*:2182)|(*:2191))|detail/([^/]++)(*:2216)))|leave(?|/([^/]++)(?|(*:2247)|/edit(*:2261)|(*:2270))|_type/([^/]++)(?|(*:2297)|/edit(*:2311)|(*:2320)))|holiday/([^/]++)(?|(*:2350)|/edit(*:2364)|(*:2373))|p(?|ay(?|roll/([^/]++)(?|(*:2408)|/edit(*:2422)|(*:2431))|ment(?|_(?|purchase(?|/([^/]++)(?|(*:2475)|/edit(*:2489)|(*:2498))|_pdf/([^/]++)(*:2521))|sale(?|/([^/]++)(?|(*:2550)|/edit(*:2564)|(*:2573))|_pdf/([^/]++)(*:2596))|return_(?|sale_pdf/([^/]++)(*:2633)|purchase_pdf/([^/]++)(*:2663)))|/returns_(?|sale/([^/]++)(?|(*:2702)|/edit(*:2716)|(*:2725))|purchase/([^/]++)(?|(*:2755)|/edit(*:2769)|(*:2778)))))|ro(?|viders/([^/]++)(?|(*:2814)|/edit(*:2828)|(*:2837))|ject(?|s/([^/]++)(?|(*:2867)|/edit(*:2881)|(*:2890))|_(?|d(?|iscussions/([^/]++)(*:2927)|ocuments/([^/]++)(*:2953))|issues/([^/]++)(?|(*:2981))))|ducts/([^/]++)(?|(*:3010)|/edit(*:3024)|(*:3033)))|os(?|/data_draft_convert_sale/([^/]++)(*:3082)|_settings/([^/]++)(*:3109))|urchase(?|s/([^/]++)(?|(*:3142)|/edit(*:3156)|(*:3165))|_pdf/([^/]++)(*:3188)))|get_(?|client_store_data/([^/]++)(*:3232)|Products_by_(?|warehouse/([^/]++)(*:3274)|purchase/([^/]++)(*:3300)|sale/([^/]++)(*:3322))|p(?|roduct_detail/([^/]++)(*:3358)|ayments_by_(?|purchase/([^/]++)(*:3398)|sale/([^/]++)(*:3420))))|t(?|ask(?|s/([^/]++)(?|(*:3455)|/edit(*:3469)|(*:3478))|_d(?|iscussions/([^/]++)(*:3512)|ocuments/([^/]++)(*:3538)))|ransfer(?|_money/([^/]++)(?|(*:3577)|/edit(*:3591)|(*:3600))|s/([^/]++)(?|(*:3623)|/edit(*:3637)|(*:3646))))|s(?|h(?|ow_product_data/([^/]++)/([^/]++)(*:3699)|ipments/([^/]++)(?|(*:3727)|/edit(*:3741)|(*:3750)))|ale(?|s(?|/([^/]++)(?|(*:3783)|/edit(*:3797)|(*:3806))|_print_invoice/([^/]++)(*:3839))|_pdf/([^/]++)(*:3862))|ettings/([^/]++)(?|(*:3891)|/edit(*:3905)|(*:3914)))|brands/([^/]++)(?|(*:3943)|/edit(*:3957)|(*:3966))|quot(?|ations/([^/]++)(?|(*:4001)|/edit(*:4015)|(*:4024))|e_pdf/([^/]++)(*:4048)))|/password/find/([^/]++)(*:4082)|/setup/([^/]++)(*:4106)|/((?!api|setup|update|update_database_module|password|module|store|online_store).*)?(*:4199)|/logout(*:4215)|/password/reset/([^/]++)(*:4248)|/update_database_module/([^/]++)(*:4289))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FaIE5rBoF5zAw5lZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::041qiDNVd3DsuwD7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ga7JzX9f3Qbljwqr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pffVFmAx7RHU469q',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dsuo9oyDbIAKIK1B',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.show',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.edit',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.update',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sale.destroy',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hizrDRlmwXKDAlar',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nRKkYzjOWTMvFY4K',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LQJxOkUbDLKSBs4I',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'sale_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.show',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.edit',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.update',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.destroy',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DbNPoEiXwABe3TKR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DyyOyTRoG6m107hU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iJVlCNBrIa2aE3NN',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'purchase_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bH8isOQ2BxCzE0Kv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UpC9zbP6CqoLGqKL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_page.show',
          ),
          1 => 
          array (
            0 => 'create_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_page.edit',
          ),
          1 => 
          array (
            0 => 'create_page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      749 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_page.update',
          ),
          1 => 
          array (
            0 => 'create_page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'create_page.destroy',
          ),
          1 => 
          array (
            0 => 'create_page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      787 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.show',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.edit',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.update',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employees.destroy',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_account.show',
          ),
          1 => 
          array (
            0 => 'employee_account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_account.edit',
          ),
          1 => 
          array (
            0 => 'employee_account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee_account.update',
          ),
          1 => 
          array (
            0 => 'employee_account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee_account.destroy',
          ),
          1 => 
          array (
            0 => 'employee_account',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.show',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.edit',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.update',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.destroy',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses_category.show',
          ),
          1 => 
          array (
            0 => 'expenses_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses_category.edit',
          ),
          1 => 
          array (
            0 => 'expenses_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses_category.update',
          ),
          1 => 
          array (
            0 => 'expenses_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expenses_category.destroy',
          ),
          1 => 
          array (
            0 => 'expenses_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RtKC1A5p6ORuVPx4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::241kjHFFKk35jQWX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HnaiNX5COzYh5zHk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BOIEdCHlfD6Sd1Mi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.show',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.edit',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.update',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'units.destroy',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x1lNbfMvwpw6Ls1a',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'work_experience.show',
          ),
          1 => 
          array (
            0 => 'work_experience',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'work_experience.edit',
          ),
          1 => 
          array (
            0 => 'work_experience',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'work_experience.update',
          ),
          1 => 
          array (
            0 => 'work_experience',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'work_experience.destroy',
          ),
          1 => 
          array (
            0 => 'work_experience',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouses.show',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouses.edit',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouses.update',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouses.destroy',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.show',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1402 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.edit',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.update',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'company.destroy',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Phv4IOyL6Y7wpl0c',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.show',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.edit',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients.update',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'clients.destroy',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients_without_ecommerce.show',
          ),
          1 => 
          array (
            0 => 'clients_without_ecommerce',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients_without_ecommerce.edit',
          ),
          1 => 
          array (
            0 => 'clients_without_ecommerce',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients_without_ecommerce.update',
          ),
          1 => 
          array (
            0 => 'clients_without_ecommerce',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'clients_without_ecommerce.destroy',
          ),
          1 => 
          array (
            0 => 'clients_without_ecommerce',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1620 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.show',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.edit',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'currencies.destroy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.show',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.edit',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.update',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'departments.destroy',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits.show',
          ),
          1 => 
          array (
            0 => 'deposit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits.edit',
          ),
          1 => 
          array (
            0 => 'deposit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits.update',
          ),
          1 => 
          array (
            0 => 'deposit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deposits.destroy',
          ),
          1 => 
          array (
            0 => 'deposit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits_category.show',
          ),
          1 => 
          array (
            0 => 'deposits_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits_category.edit',
          ),
          1 => 
          array (
            0 => 'deposits_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deposits_category.update',
          ),
          1 => 
          array (
            0 => 'deposits_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'deposits_category.destroy',
          ),
          1 => 
          array (
            0 => 'deposits_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designations.show',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designations.edit',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'designations.update',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'designations.destroy',
          ),
          1 => 
          array (
            0 => 'designation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WUIIr5qigwnwBy8g',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_shift.show',
          ),
          1 => 
          array (
            0 => 'office_shift',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_shift.edit',
          ),
          1 => 
          array (
            0 => 'office_shift',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'office_shift.update',
          ),
          1 => 
          array (
            0 => 'office_shift',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'office_shift.destroy',
          ),
          1 => 
          array (
            0 => 'office_shift',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendances.show',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendances.edit',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendances.update',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attendances.destroy',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendance_by_employee.post',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.show',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2124 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.edit',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.update',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.destroy',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adjustments.show',
          ),
          1 => 
          array (
            0 => 'adjustment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adjustments.edit',
          ),
          1 => 
          array (
            0 => 'adjustment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adjustments.update',
          ),
          1 => 
          array (
            0 => 'adjustment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'adjustments.destroy',
          ),
          1 => 
          array (
            0 => 'adjustment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nZCNRCnSBenzf9X5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave.show',
          ),
          1 => 
          array (
            0 => 'leave',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave.edit',
          ),
          1 => 
          array (
            0 => 'leave',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave.update',
          ),
          1 => 
          array (
            0 => 'leave',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'leave.destroy',
          ),
          1 => 
          array (
            0 => 'leave',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave_type.show',
          ),
          1 => 
          array (
            0 => 'leave_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave_type.edit',
          ),
          1 => 
          array (
            0 => 'leave_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'leave_type.update',
          ),
          1 => 
          array (
            0 => 'leave_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'leave_type.destroy',
          ),
          1 => 
          array (
            0 => 'leave_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holiday.show',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holiday.edit',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holiday.update',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'holiday.destroy',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.show',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.edit',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.update',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.destroy',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_purchase.show',
          ),
          1 => 
          array (
            0 => 'payment_purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_purchase.edit',
          ),
          1 => 
          array (
            0 => 'payment_purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_purchase.update',
          ),
          1 => 
          array (
            0 => 'payment_purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'payment_purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lgE8NRD8mtG9TrK5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_sale.show',
          ),
          1 => 
          array (
            0 => 'payment_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_sale.edit',
          ),
          1 => 
          array (
            0 => 'payment_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_sale.update',
          ),
          1 => 
          array (
            0 => 'payment_sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payment_sale.destroy',
          ),
          1 => 
          array (
            0 => 'payment_sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EdfOJHPNhmaujuSX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4oidM1CbwobOYrnE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BXcvsZd3jjZK3ttY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_sale.show',
          ),
          1 => 
          array (
            0 => 'returns_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2716 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_sale.edit',
          ),
          1 => 
          array (
            0 => 'returns_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_sale.update',
          ),
          1 => 
          array (
            0 => 'returns_sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'returns_sale.destroy',
          ),
          1 => 
          array (
            0 => 'returns_sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_purchase.show',
          ),
          1 => 
          array (
            0 => 'returns_purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_purchase.edit',
          ),
          1 => 
          array (
            0 => 'returns_purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2778 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'returns_purchase.update',
          ),
          1 => 
          array (
            0 => 'returns_purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'returns_purchase.destroy',
          ),
          1 => 
          array (
            0 => 'returns_purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providers.show',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providers.edit',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'providers.update',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'providers.destroy',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2867 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.show',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.edit',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'projects.update',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'projects.destroy',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WiITGmymnPpwSFf6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SqlcvKZysZyGiEBN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DsYqHH7Bb0YCHoHj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ugN1zAVPVfZXuq4s',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SW20nLs6S09hulwE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5zWklGqkQuFuE8UU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.show',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.edit',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.update',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.destroy',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NHue3FrFQH2mofdN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RKgckkgQRF3mb7LM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::maZic1QzkTVoZoWm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V158uoKdpFctxM9W',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EnOz3N6gEqnEHdHG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eMDBzKRb0mTkWYS7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QCYCQj5wbj7O5NRJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KFBTm9Ap5I8weZJV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tasks.show',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tasks.edit',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tasks.update',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tasks.destroy',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bbXtcS4ElxomePg9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Eu3LzBHkpvpUIKyo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer_money.show',
          ),
          1 => 
          array (
            0 => 'transfer_money',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer_money.edit',
          ),
          1 => 
          array (
            0 => 'transfer_money',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer_money.update',
          ),
          1 => 
          array (
            0 => 'transfer_money',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transfer_money.destroy',
          ),
          1 => 
          array (
            0 => 'transfer_money',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.show',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.edit',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.update',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.destroy',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G7270w6PKT0zvgMo',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'variant_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipments.show',
          ),
          1 => 
          array (
            0 => 'shipment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipments.edit',
          ),
          1 => 
          array (
            0 => 'shipment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipments.update',
          ),
          1 => 
          array (
            0 => 'shipment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'shipments.destroy',
          ),
          1 => 
          array (
            0 => 'shipment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.show',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.edit',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3806 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.update',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sales.destroy',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pTphQeFxujxStLA8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dfqD3osxgWv0rE5s',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.show',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.edit',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.show',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.edit',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.update',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.destroy',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DW3Dj1HVIWjUq71c',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RzukkSpNBgZYQKvR',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6SjUETebWNFCcciU',
          ),
          1 => 
          array (
            0 => 'vue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::US8OPzv2neIt5uFY',
            'vue' => NULL,
          ),
          1 => 
          array (
            0 => 'vue',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_database_module',
          ),
          1 => 
          array (
            0 => 'module_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BKv4w6g2NtEMf5U7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007f40000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BKv4w6g2NtEMf5U7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uEcJ4lvi0h5QkGbF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/password/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PasswordResetController@create',
        'controller' => 'App\\Http\\Controllers\\PasswordResetController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/password',
        'where' => 
        array (
        ),
        'as' => 'generated::uEcJ4lvi0h5QkGbF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8koEWazX1jmQSE4p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PasswordResetController@reset',
        'controller' => 'App\\Http\\Controllers\\PasswordResetController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/password',
        'where' => 
        array (
        ),
        'as' => 'generated::8koEWazX1jmQSE4p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lfEs4s5R00IcrwNr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/getAccessToken',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@getAccessToken',
        'controller' => 'App\\Http\\Controllers\\AuthController@getAccessToken',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lfEs4s5R00IcrwNr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CoEAEzPPbaX5kY0E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dashboard_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@dashboard_data',
        'controller' => 'App\\Http\\Controllers\\DashboardController@dashboard_data',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CoEAEzPPbaX5kY0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zVSJK48S3qbFej21' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/retrieve-customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@retrieveCustomer',
        'controller' => 'App\\Http\\Controllers\\StripeController@retrieveCustomer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zVSJK48S3qbFej21',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zYb7OkO7O3i12kjA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update-customer-stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@updateCustomer',
        'controller' => 'App\\Http\\Controllers\\StripeController@updateCustomer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zYb7OkO7O3i12kjA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::olH5s16FJaSFJG6y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clear_cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@Clear_Cache',
        'controller' => 'App\\Http\\Controllers\\SettingsController@Clear_Cache',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::olH5s16FJaSFJG6y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r9dpbuD4cHgmjPGp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Client_Report',
        'controller' => 'App\\Http\\Controllers\\ReportController@Client_Report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::r9dpbuD4cHgmjPGp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FaIE5rBoF5zAw5lZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/client/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Client_Report_detail',
        'controller' => 'App\\Http\\Controllers\\ReportController@Client_Report_detail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FaIE5rBoF5zAw5lZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kSD2kBzfESkbWxSf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/client_sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Sales_Client',
        'controller' => 'App\\Http\\Controllers\\ReportController@Sales_Client',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kSD2kBzfESkbWxSf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ziw4jR3DLhZh6oc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/client_payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Payments_Client',
        'controller' => 'App\\Http\\Controllers\\ReportController@Payments_Client',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3ziw4jR3DLhZh6oc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::16OVUytSzki23SX6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/client_quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Quotations_Client',
        'controller' => 'App\\Http\\Controllers\\ReportController@Quotations_Client',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::16OVUytSzki23SX6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oNN5M1gbxBaT9ESO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/client_returns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Returns_Client',
        'controller' => 'App\\Http\\Controllers\\ReportController@Returns_Client',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oNN5M1gbxBaT9ESO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FIWyvUFT6pLdicfb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Providers_Report',
        'controller' => 'App\\Http\\Controllers\\ReportController@Providers_Report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FIWyvUFT6pLdicfb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ga7JzX9f3Qbljwqr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/provider/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Provider_Report_detail',
        'controller' => 'App\\Http\\Controllers\\ReportController@Provider_Report_detail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ga7JzX9f3Qbljwqr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::crDKbeROhJzq4xu9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/provider_purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Purchases_Provider',
        'controller' => 'App\\Http\\Controllers\\ReportController@Purchases_Provider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::crDKbeROhJzq4xu9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZCjsqEGiuRPj1k1G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/provider_payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Payments_Provider',
        'controller' => 'App\\Http\\Controllers\\ReportController@Payments_Provider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZCjsqEGiuRPj1k1G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5odapwC5y7XhuAL8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/provider_returns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Returns_Provider',
        'controller' => 'App\\Http\\Controllers\\ReportController@Returns_Provider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5odapwC5y7XhuAL8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rCMpF0MgLDFObaCq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Report_Sales',
        'controller' => 'App\\Http\\Controllers\\ReportController@Report_Sales',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rCMpF0MgLDFObaCq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AhcsTsl00NTWA5xv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Report_Purchases',
        'controller' => 'App\\Http\\Controllers\\ReportController@Report_Purchases',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AhcsTsl00NTWA5xv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jGORMnDofeve5m8i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_last_sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Get_last_Sales',
        'controller' => 'App\\Http\\Controllers\\ReportController@Get_last_Sales',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jGORMnDofeve5m8i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UU2U8qKH9yD2xjl8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/stock_alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Products_Alert',
        'controller' => 'App\\Http\\Controllers\\ReportController@Products_Alert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UU2U8qKH9yD2xjl8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OFiPuP3Pq8Lb3mVU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/payment_chart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Payment_chart',
        'controller' => 'App\\Http\\Controllers\\ReportController@Payment_chart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OFiPuP3Pq8Lb3mVU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xx9IUEu2bBjjRurC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/warehouse_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Warehouse_Report',
        'controller' => 'App\\Http\\Controllers\\ReportController@Warehouse_Report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Xx9IUEu2bBjjRurC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2c8Jc8THhDOPtUCN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/sales_warehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Sales_Warehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@Sales_Warehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2c8Jc8THhDOPtUCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vc90XDgdR3Hf7Xt6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/quotations_warehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Quotations_Warehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@Quotations_Warehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Vc90XDgdR3Hf7Xt6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2nHyyg6EKPtigjfS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/returns_sale_warehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Returns_Sale_Warehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@Returns_Sale_Warehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2nHyyg6EKPtigjfS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aZybWpFN4Sh3Zn9P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/returns_purchase_warehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Returns_Purchase_Warehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@Returns_Purchase_Warehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aZybWpFN4Sh3Zn9P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wMkdCC3Y9skRKS8f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/expenses_warehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Expenses_Warehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@Expenses_Warehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wMkdCC3Y9skRKS8f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ol8pztSuquJTbpH8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/warhouse_count_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@Warhouse_Count_Stock',
        'controller' => 'App\\Http\\Controllers\\ReportController@Warhouse_Count_Stock',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ol8pztSuquJTbpH8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N7oy3gOKeeVMJzxD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/report_today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@report_today',
        'controller' => 'App\\Http\\Controllers\\ReportController@report_today',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::N7oy3gOKeeVMJzxD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9otevG5yDC0YnG9i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/count_quantity_alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@count_quantity_alert',
        'controller' => 'App\\Http\\Controllers\\ReportController@count_quantity_alert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9otevG5yDC0YnG9i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yc7kPfaQjDeBG3Kx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/profit_and_loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@ProfitAndLoss',
        'controller' => 'App\\Http\\Controllers\\ReportController@ProfitAndLoss',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Yc7kPfaQjDeBG3Kx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8NceDgAyC76PIZBe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/report_dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@report_dashboard',
        'controller' => 'App\\Http\\Controllers\\ReportController@report_dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8NceDgAyC76PIZBe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0UmOvJdCQCGe7bCD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/top_products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@report_top_products',
        'controller' => 'App\\Http\\Controllers\\ReportController@report_top_products',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0UmOvJdCQCGe7bCD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::whhBMzyKh87nW6SG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/top_customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@report_top_customers',
        'controller' => 'App\\Http\\Controllers\\ReportController@report_top_customers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::whhBMzyKh87nW6SG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QNJXsx1bl0L5Gfpv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/product_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@product_report',
        'controller' => 'App\\Http\\Controllers\\ReportController@product_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QNJXsx1bl0L5Gfpv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m6Cyf0gWXdyFjwqm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/sale_products_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@sale_products_details',
        'controller' => 'App\\Http\\Controllers\\ReportController@sale_products_details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::m6Cyf0gWXdyFjwqm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OAta1APzgDo3gOsl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/product_sales_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@product_sales_report',
        'controller' => 'App\\Http\\Controllers\\ReportController@product_sales_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OAta1APzgDo3gOsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IMxpopkj7TX2iVyP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/product_purchases_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@product_purchases_report',
        'controller' => 'App\\Http\\Controllers\\ReportController@product_purchases_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IMxpopkj7TX2iVyP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rDuQrt5770zyMLfr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@users_Report',
        'controller' => 'App\\Http\\Controllers\\ReportController@users_Report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rDuQrt5770zyMLfr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uDJZHgXyihIanQgo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@stock_Report',
        'controller' => 'App\\Http\\Controllers\\ReportController@stock_Report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uDJZHgXyihIanQgo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fWldRbOCzOd2ihgt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_sales_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_sales_by_user',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_sales_by_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fWldRbOCzOd2ihgt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5RLPA1UlBtuJdUre' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_quotations_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_quotations_by_user',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_quotations_by_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5RLPA1UlBtuJdUre',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z8dPPxxcbjjjQtzV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_sales_return_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_sales_return_by_user',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_sales_return_by_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::z8dPPxxcbjjjQtzV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o4rckaW76HihZjzG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_purchases_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_purchases_by_user',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_purchases_by_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::o4rckaW76HihZjzG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MqdzvYRShkSAWNWT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_purchase_return_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_purchase_return_by_user',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_purchase_return_by_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MqdzvYRShkSAWNWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::INmUQsnWMDBF6O9e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_transfer_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_transfer_by_user',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_transfer_by_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::INmUQsnWMDBF6O9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i697sufz9ezhytJg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_adjustment_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_adjustment_by_user',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_adjustment_by_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::i697sufz9ezhytJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UJ2pLelnZm9feZxM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_sales_by_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_sales_by_product',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_sales_by_product',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UJ2pLelnZm9feZxM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l3hA2yuHfcIPxUvA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_quotations_by_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_quotations_by_product',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_quotations_by_product',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::l3hA2yuHfcIPxUvA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3fbdUBuhwAlT1Y0C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_sales_return_by_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_sales_return_by_product',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_sales_return_by_product',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3fbdUBuhwAlT1Y0C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5YTPNZP4Mqd8JBfL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_purchases_by_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_purchases_by_product',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_purchases_by_product',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5YTPNZP4Mqd8JBfL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lJHfW6QqSAkhUdXT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_purchase_return_by_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_purchase_return_by_product',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_purchase_return_by_product',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lJHfW6QqSAkhUdXT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rvNWnVFOsuGJiws' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_transfer_by_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_transfer_by_product',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_transfer_by_product',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4rvNWnVFOsuGJiws',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3pQ7CQ1Lb1c7Bpjx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/get_adjustment_by_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@get_adjustment_by_product',
        'controller' => 'App\\Http\\Controllers\\ReportController@get_adjustment_by_product',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3pQ7CQ1Lb1c7Bpjx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::041qiDNVd3DsuwD7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/client_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@download_report_client_pdf',
        'controller' => 'App\\Http\\Controllers\\ReportController@download_report_client_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::041qiDNVd3DsuwD7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pffVFmAx7RHU469q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/provider_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@download_report_provider_pdf',
        'controller' => 'App\\Http\\Controllers\\ReportController@download_report_provider_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pffVFmAx7RHU469q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nu08KDRJHucpeHZa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/inventory_valuation_summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@inventory_valuation_summary',
        'controller' => 'App\\Http\\Controllers\\ReportController@inventory_valuation_summary',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Nu08KDRJHucpeHZa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L64dYrV44vkhIf1j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/expenses_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@expenses_report',
        'controller' => 'App\\Http\\Controllers\\ReportController@expenses_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::L64dYrV44vkhIf1j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UviaoFX7QlgiKntS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/report/deposits_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@deposits_report',
        'controller' => 'App\\Http\\Controllers\\ReportController@deposits_report',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UviaoFX7QlgiKntS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employees.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employees/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employees.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employees.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employees.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employees/{employee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employees.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employees.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employees.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::alsOLWbBcoGXpPoq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/employees/import/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@import_employees',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@import_employees',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::alsOLWbBcoGXpPoq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wb3Nxpxmr72DbCrt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/employees/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Wb3Nxpxmr72DbCrt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zb6OtvUZaBsbJm3a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_employees_by_department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@Get_employees_by_department',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@Get_employees_by_department',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Zb6OtvUZaBsbJm3a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RtKC1A5p6ORuVPx4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update_social_profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@update_social_profile',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@update_social_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RtKC1A5p6ORuVPx4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QxhycaV7qYg2M9Tf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_experiences_by_employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@get_experiences_by_employee',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@get_experiences_by_employee',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QxhycaV7qYg2M9Tf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pCrHxP92bLqyJmiS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_accounts_by_employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@get_accounts_by_employee',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@get_accounts_by_employee',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pCrHxP92bLqyJmiS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hUCLFbZtSsVzyu2b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Get_employees_by_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeesController@Get_employees_by_company',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeesController@Get_employees_by_company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hUCLFbZtSsVzyu2b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'work_experience.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/work_experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'work_experience.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'work_experience.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/work_experience/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'work_experience.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'work_experience.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/work_experience',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'work_experience.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'work_experience.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/work_experience/{work_experience}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'work_experience.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'work_experience.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/work_experience/{work_experience}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'work_experience.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'work_experience.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/work_experience/{work_experience}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'work_experience.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'work_experience.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/work_experience/{work_experience}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'work_experience.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeExperienceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_account.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employee_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employee_account.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_account.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employee_account/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employee_account.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_account.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/employee_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employee_account.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_account.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employee_account/{employee_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employee_account.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_account.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/employee_account/{employee_account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employee_account.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_account.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/employee_account/{employee_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employee_account.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee_account.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/employee_account/{employee_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'employee_account.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeAccountController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'company.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/company/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'company.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'company.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/company/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'company.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/company/{company}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'company.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/company/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'company.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/company/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'company.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mf1CWsuR3tqVJiGo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_all_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@Get_all_Company',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@Get_all_Company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mf1CWsuR3tqVJiGo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KH4ROWJfjybOR1a0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/company/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\CompanyController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\CompanyController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KH4ROWJfjybOR1a0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'departments.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/departments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'departments.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'departments.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'departments.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/departments/{department}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'departments.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'departments.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'departments.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ItgCLW6eeVaprvUp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_all_departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@Get_all_Departments',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@Get_all_Departments',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ItgCLW6eeVaprvUp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Get_departments_by_company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_departments_by_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@Get_departments_by_company',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@Get_departments_by_company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'Get_departments_by_company',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6U2t9HgM7rrykADL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/departments/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\DepartmentsController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6U2t9HgM7rrykADL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/designations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'designations.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/designations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'designations.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/designations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'designations.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/designations/{designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'designations.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/designations/{designation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'designations.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/designations/{designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'designations.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'designations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/designations/{designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'designations.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e64MM4GJNOdGF0RJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_designations_by_department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@Get_designations_by_department',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@Get_designations_by_department',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::e64MM4GJNOdGF0RJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UxwMslCMlmdmFXBZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/designations/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\DesignationsController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\DesignationsController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UxwMslCMlmdmFXBZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_shift.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/office_shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'office_shift.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_shift.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/office_shift/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'office_shift.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_shift.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/office_shift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'office_shift.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_shift.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/office_shift/{office_shift}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'office_shift.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_shift.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/office_shift/{office_shift}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'office_shift.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_shift.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/office_shift/{office_shift}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'office_shift.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'office_shift.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/office_shift/{office_shift}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'office_shift.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dulu60J65ojUKePt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/office_shift/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\OfficeShiftController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Dulu60J65ojUKePt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendances.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/attendances',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'attendances.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendances.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/attendances/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'attendances.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendances.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/attendances',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'attendances.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendances.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/attendances/{attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'attendances.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendances.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/attendances/{attendance}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'attendances.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendances.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/attendances/{attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'attendances.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendances.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/attendances/{attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'attendances.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'daily_attendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/daily_attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@daily_attendance',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@daily_attendance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'daily_attendance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance_by_employee.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/attendance_by_employee/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\EmployeeSessionController@attendance_by_employee',
        'controller' => 'App\\Http\\Controllers\\hrm\\EmployeeSessionController@attendance_by_employee',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'attendance_by_employee.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CQc4JPrZA6pJpm2F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/attendances/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\AttendancesController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\AttendancesController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CQc4JPrZA6pJpm2F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave/{leave}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave/{leave}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/leave/{leave}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/leave/{leave}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave_type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave_type.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave_type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave_type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave_type.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave_type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/leave_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave_type.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave_type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave_type/{leave_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave_type.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave_type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/leave_type/{leave_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave_type.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave_type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/leave_type/{leave_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave_type.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'leave_type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/leave_type/{leave_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'leave_type.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jFYw8ogsyBrD9Aes' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/leave/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jFYw8ogsyBrD9Aes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::van6jFl1ZeVhVFrR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/leave_type/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\LeaveTypeController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::van6jFl1ZeVhVFrR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holiday.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/holiday',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'holiday.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holiday.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/holiday/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'holiday.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holiday.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/holiday',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'holiday.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holiday.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/holiday/{holiday}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'holiday.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holiday.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/holiday/{holiday}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'holiday.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holiday.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/holiday/{holiday}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'holiday.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holiday.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/holiday/{holiday}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'holiday.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FNJaPdS8NPLPXZY9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/holiday/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\HolidayController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\hrm\\HolidayController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FNJaPdS8NPLPXZY9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payroll.index',
        'uses' => 'App\\Http\\Controllers\\hrm\\PayrollController@index',
        'controller' => 'App\\Http\\Controllers\\hrm\\PayrollController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payroll/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payroll.create',
        'uses' => 'App\\Http\\Controllers\\hrm\\PayrollController@create',
        'controller' => 'App\\Http\\Controllers\\hrm\\PayrollController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payroll.store',
        'uses' => 'App\\Http\\Controllers\\hrm\\PayrollController@store',
        'controller' => 'App\\Http\\Controllers\\hrm\\PayrollController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payroll/{payroll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payroll.show',
        'uses' => 'App\\Http\\Controllers\\hrm\\PayrollController@show',
        'controller' => 'App\\Http\\Controllers\\hrm\\PayrollController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payroll/{payroll}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payroll.edit',
        'uses' => 'App\\Http\\Controllers\\hrm\\PayrollController@edit',
        'controller' => 'App\\Http\\Controllers\\hrm\\PayrollController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/payroll/{payroll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payroll.update',
        'uses' => 'App\\Http\\Controllers\\hrm\\PayrollController@update',
        'controller' => 'App\\Http\\Controllers\\hrm\\PayrollController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/payroll/{payroll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payroll.destroy',
        'uses' => 'App\\Http\\Controllers\\hrm\\PayrollController@destroy',
        'controller' => 'App\\Http\\Controllers\\hrm\\PayrollController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XeWmRDR6NHr5NAgr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/core/get_departments_by_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_departments_by_company',
        'controller' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_departments_by_company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/core',
        'where' => 
        array (
        ),
        'as' => 'generated::XeWmRDR6NHr5NAgr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4TzojASbEGuHUDaB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/core/get_designations_by_department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_designations_by_department',
        'controller' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_designations_by_department',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/core',
        'where' => 
        array (
        ),
        'as' => 'generated::4TzojASbEGuHUDaB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bEg4vj9XRxbxkE9R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/core/get_office_shift_by_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_office_shift_by_company',
        'controller' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_office_shift_by_company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/core',
        'where' => 
        array (
        ),
        'as' => 'generated::bEg4vj9XRxbxkE9R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2SEVPzybFTTYzYsd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/core/get_employees_by_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_employees_by_company',
        'controller' => 'App\\Http\\Controllers\\hrm\\CoreController@Get_employees_by_company',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/core',
        'where' => 
        array (
        ),
        'as' => 'generated::2SEVPzybFTTYzYsd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients.index',
        'uses' => 'App\\Http\\Controllers\\ClientController@index',
        'controller' => 'App\\Http\\Controllers\\ClientController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients.create',
        'uses' => 'App\\Http\\Controllers\\ClientController@create',
        'controller' => 'App\\Http\\Controllers\\ClientController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients.store',
        'uses' => 'App\\Http\\Controllers\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\ClientController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients.show',
        'uses' => 'App\\Http\\Controllers\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\ClientController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients/{client}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients.edit',
        'uses' => 'App\\Http\\Controllers\\ClientController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients.update',
        'uses' => 'App\\Http\\Controllers\\ClientController@update',
        'controller' => 'App\\Http\\Controllers\\ClientController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dx2rtfW02p7bECu3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clients/import/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@import_clients',
        'controller' => 'App\\Http\\Controllers\\ClientController@import_clients',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Dx2rtfW02p7bECu3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GQsg4Q5uCJ5HseEi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_clients_without_paginate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@Get_Clients_Without_Paginate',
        'controller' => 'App\\Http\\Controllers\\ClientController@Get_Clients_Without_Paginate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GQsg4Q5uCJ5HseEi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BH3MdO3NbnIAEEYa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clients/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\ClientController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BH3MdO3NbnIAEEYa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IOPqnSO4oFjdPTbw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clients_pay_due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@clients_pay_due',
        'controller' => 'App\\Http\\Controllers\\ClientController@clients_pay_due',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IOPqnSO4oFjdPTbw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fws4507e6m5kg5iE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clients_pay_return_due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@pay_sale_return_due',
        'controller' => 'App\\Http\\Controllers\\ClientController@pay_sale_return_due',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fws4507e6m5kg5iE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RKgckkgQRF3mb7LM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_client_store_data/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@get_client_store_data',
        'controller' => 'App\\Http\\Controllers\\ClientController@get_client_store_data',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RKgckkgQRF3mb7LM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients_without_ecommerce.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients_without_ecommerce',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients_without_ecommerce.index',
        'uses' => 'App\\Http\\Controllers\\ClientsEcommerceController@index',
        'controller' => 'App\\Http\\Controllers\\ClientsEcommerceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients_without_ecommerce.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients_without_ecommerce/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients_without_ecommerce.create',
        'uses' => 'App\\Http\\Controllers\\ClientsEcommerceController@create',
        'controller' => 'App\\Http\\Controllers\\ClientsEcommerceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients_without_ecommerce.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clients_without_ecommerce',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients_without_ecommerce.store',
        'uses' => 'App\\Http\\Controllers\\ClientsEcommerceController@store',
        'controller' => 'App\\Http\\Controllers\\ClientsEcommerceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients_without_ecommerce.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients_without_ecommerce/{clients_without_ecommerce}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients_without_ecommerce.show',
        'uses' => 'App\\Http\\Controllers\\ClientsEcommerceController@show',
        'controller' => 'App\\Http\\Controllers\\ClientsEcommerceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients_without_ecommerce.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/clients_without_ecommerce/{clients_without_ecommerce}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients_without_ecommerce.edit',
        'uses' => 'App\\Http\\Controllers\\ClientsEcommerceController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientsEcommerceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients_without_ecommerce.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/clients_without_ecommerce/{clients_without_ecommerce}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients_without_ecommerce.update',
        'uses' => 'App\\Http\\Controllers\\ClientsEcommerceController@update',
        'controller' => 'App\\Http\\Controllers\\ClientsEcommerceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients_without_ecommerce.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/clients_without_ecommerce/{clients_without_ecommerce}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'clients_without_ecommerce.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientsEcommerceController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientsEcommerceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'providers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'providers.index',
        'uses' => 'App\\Http\\Controllers\\ProvidersController@index',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'providers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/providers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'providers.create',
        'uses' => 'App\\Http\\Controllers\\ProvidersController@create',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'providers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'providers.store',
        'uses' => 'App\\Http\\Controllers\\ProvidersController@store',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'providers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/providers/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'providers.show',
        'uses' => 'App\\Http\\Controllers\\ProvidersController@show',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'providers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/providers/{provider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'providers.edit',
        'uses' => 'App\\Http\\Controllers\\ProvidersController@edit',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'providers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/providers/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'providers.update',
        'uses' => 'App\\Http\\Controllers\\ProvidersController@update',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'providers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/providers/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'providers.destroy',
        'uses' => 'App\\Http\\Controllers\\ProvidersController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tM1F157CvoMblLD4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/providers/import/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProvidersController@import_providers',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@import_providers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tM1F157CvoMblLD4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mWhZGJnxnYiBtj92' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/providers/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProvidersController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mWhZGJnxnYiBtj92',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f6uYTYFDnpR9JYZy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pay_supplier_due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProvidersController@pay_supplier_due',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@pay_supplier_due',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::f6uYTYFDnpR9JYZy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9dXUsthciLy8XVY8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pay_purchase_return_due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProvidersController@pay_purchase_return_due',
        'controller' => 'App\\Http\\Controllers\\ProvidersController@pay_purchase_return_due',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9dXUsthciLy8XVY8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SXG3qsWvHo27uNds' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pos/create_pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@CreatePOS',
        'controller' => 'App\\Http\\Controllers\\PosController@CreatePOS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SXG3qsWvHo27uNds',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IfvVAvvr9zybbz2S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pos/get_products_pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@GetProductsByParametre',
        'controller' => 'App\\Http\\Controllers\\PosController@GetProductsByParametre',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IfvVAvvr9zybbz2S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aHk7m3gJCjEQfbf9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pos/data_create_pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@GetELementPos',
        'controller' => 'App\\Http\\Controllers\\PosController@GetELementPos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aHk7m3gJCjEQfbf9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UvOTejEURncjdVwQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pos/create_draft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@CreateDraft',
        'controller' => 'App\\Http\\Controllers\\PosController@CreateDraft',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UvOTejEURncjdVwQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PJVZj8yk3506PSdV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_draft_sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@get_draft_sales',
        'controller' => 'App\\Http\\Controllers\\PosController@get_draft_sales',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PJVZj8yk3506PSdV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dsuo9oyDbIAKIK1B' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/remove_draft_sale/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@remove_draft_sale',
        'controller' => 'App\\Http\\Controllers\\PosController@remove_draft_sale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Dsuo9oyDbIAKIK1B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SW20nLs6S09hulwE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pos/data_draft_convert_sale/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@data_draft_convert_sale',
        'controller' => 'App\\Http\\Controllers\\PosController@data_draft_convert_sale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SW20nLs6S09hulwE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9hXADs9Y5EMRHfsg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pos/submit_sale_from_draft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@submit_sale_from_draft',
        'controller' => 'App\\Http\\Controllers\\PosController@submit_sale_from_draft',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9hXADs9Y5EMRHfsg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'projects.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'projects.index',
        'uses' => 'App\\Http\\Controllers\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'projects.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/projects/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'projects.create',
        'uses' => 'App\\Http\\Controllers\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\ProjectController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'projects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'projects.store',
        'uses' => 'App\\Http\\Controllers\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'projects.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'projects.show',
        'uses' => 'App\\Http\\Controllers\\ProjectController@show',
        'controller' => 'App\\Http\\Controllers\\ProjectController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'projects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/projects/{project}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'projects.edit',
        'uses' => 'App\\Http\\Controllers\\ProjectController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'projects.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'projects.update',
        'uses' => 'App\\Http\\Controllers\\ProjectController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'projects.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'projects.destroy',
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MLcTWwlBe10ePULq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/projects/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\ProjectController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MLcTWwlBe10ePULq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jI02pfwmhZFuXA22' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/project_discussions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@Create_project_discussions',
        'controller' => 'App\\Http\\Controllers\\ProjectController@Create_project_discussions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jI02pfwmhZFuXA22',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WiITGmymnPpwSFf6' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/project_discussions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy_project_discussion',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy_project_discussion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WiITGmymnPpwSFf6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::16KpKCHfmXDrlZBw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/project_issues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@Create_project_issues',
        'controller' => 'App\\Http\\Controllers\\ProjectController@Create_project_issues',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::16KpKCHfmXDrlZBw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DsYqHH7Bb0YCHoHj' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/project_issues/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@Update_project_issues',
        'controller' => 'App\\Http\\Controllers\\ProjectController@Update_project_issues',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DsYqHH7Bb0YCHoHj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ugN1zAVPVfZXuq4s' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/project_issues/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy_project_issues',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy_project_issues',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ugN1zAVPVfZXuq4s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LPjNyWUoUMf710X3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/project_documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@Create_project_documents',
        'controller' => 'App\\Http\\Controllers\\ProjectController@Create_project_documents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LPjNyWUoUMf710X3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SqlcvKZysZyGiEBN' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/project_documents/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy_project_documents',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy_project_documents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SqlcvKZysZyGiEBN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'tasks.index',
        'uses' => 'App\\Http\\Controllers\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\TaskController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tasks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'tasks.create',
        'uses' => 'App\\Http\\Controllers\\TaskController@create',
        'controller' => 'App\\Http\\Controllers\\TaskController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'tasks.store',
        'uses' => 'App\\Http\\Controllers\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\TaskController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'tasks.show',
        'uses' => 'App\\Http\\Controllers\\TaskController@show',
        'controller' => 'App\\Http\\Controllers\\TaskController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tasks/{task}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'tasks.edit',
        'uses' => 'App\\Http\\Controllers\\TaskController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'tasks.update',
        'uses' => 'App\\Http\\Controllers\\TaskController@update',
        'controller' => 'App\\Http\\Controllers\\TaskController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'tasks.destroy',
        'uses' => 'App\\Http\\Controllers\\TaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::241kjHFFKk35jQWX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update_task_status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@update_task_status',
        'controller' => 'App\\Http\\Controllers\\TaskController@update_task_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::241kjHFFKk35jQWX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pnTa1Cp0U5sMXbI6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tasks/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\TaskController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pnTa1Cp0U5sMXbI6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tasks_kanban' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tasks_kanban',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@tasks_kanban',
        'controller' => 'App\\Http\\Controllers\\TaskController@tasks_kanban',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'tasks_kanban',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task_change_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/task_change_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@task_change_status',
        'controller' => 'App\\Http\\Controllers\\TaskController@task_change_status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'task_change_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4WLT0dZxtHdSSx3w' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/task_discussions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@Create_task_discussions',
        'controller' => 'App\\Http\\Controllers\\TaskController@Create_task_discussions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4WLT0dZxtHdSSx3w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bbXtcS4ElxomePg9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/task_discussions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@destroy_task_discussion',
        'controller' => 'App\\Http\\Controllers\\TaskController@destroy_task_discussion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bbXtcS4ElxomePg9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VnFkdgt6ku0KLhfS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/task_documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@Create_task_documents',
        'controller' => 'App\\Http\\Controllers\\TaskController@Create_task_documents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VnFkdgt6ku0KLhfS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Eu3LzBHkpvpUIKyo' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/task_documents/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@destroy_task_documents',
        'controller' => 'App\\Http\\Controllers\\TaskController@destroy_task_documents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Eu3LzBHkpvpUIKyo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'products.index',
        'uses' => 'App\\Http\\Controllers\\ProductsController@index',
        'controller' => 'App\\Http\\Controllers\\ProductsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'products.create',
        'uses' => 'App\\Http\\Controllers\\ProductsController@create',
        'controller' => 'App\\Http\\Controllers\\ProductsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'products.store',
        'uses' => 'App\\Http\\Controllers\\ProductsController@store',
        'controller' => 'App\\Http\\Controllers\\ProductsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'products.show',
        'uses' => 'App\\Http\\Controllers\\ProductsController@show',
        'controller' => 'App\\Http\\Controllers\\ProductsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'products.edit',
        'uses' => 'App\\Http\\Controllers\\ProductsController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'products.update',
        'uses' => 'App\\Http\\Controllers\\ProductsController@update',
        'controller' => 'App\\Http\\Controllers\\ProductsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'products.destroy',
        'uses' => 'App\\Http\\Controllers\\ProductsController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K9wVrqmliCTawkDF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products/import/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@import_products',
        'controller' => 'App\\Http\\Controllers\\ProductsController@import_products',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::K9wVrqmliCTawkDF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::maZic1QzkTVoZoWm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_Products_by_warehouse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@Products_by_Warehouse',
        'controller' => 'App\\Http\\Controllers\\ProductsController@Products_by_Warehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::maZic1QzkTVoZoWm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eMDBzKRb0mTkWYS7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_product_detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@Get_Products_Details',
        'controller' => 'App\\Http\\Controllers\\ProductsController@Get_Products_Details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eMDBzKRb0mTkWYS7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7H0mTZJmWiOZ6dt9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_products_stock_alerts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@Products_Alert',
        'controller' => 'App\\Http\\Controllers\\ProductsController@Products_Alert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7H0mTZJmWiOZ6dt9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2HDIWV73288ChVFl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/barcode_create_page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@Get_element_barcode',
        'controller' => 'App\\Http\\Controllers\\ProductsController@Get_element_barcode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2HDIWV73288ChVFl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ia2F1vMdTcDaiHRl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\ProductsController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ia2F1vMdTcDaiHRl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G7270w6PKT0zvgMo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/show_product_data/{id}/{variant_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@show_product_data',
        'controller' => 'App\\Http\\Controllers\\ProductsController@show_product_data',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::G7270w6PKT0zvgMo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get_products_materiels' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_products_materiels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@get_products_materiels',
        'controller' => 'App\\Http\\Controllers\\ProductsController@get_products_materiels',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'get_products_materiels',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wfVkifdz6eN7lu5g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/count_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@count_stock_list',
        'controller' => 'App\\Http\\Controllers\\ProductsController@count_stock_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wfVkifdz6eN7lu5g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9lBla3uXFqA7F4o5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store_count_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductsController@store_count_stock',
        'controller' => 'App\\Http\\Controllers\\ProductsController@store_count_stock',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9lBla3uXFqA7F4o5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'categories.index',
        'uses' => 'App\\Http\\Controllers\\CategorieController@index',
        'controller' => 'App\\Http\\Controllers\\CategorieController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'categories.create',
        'uses' => 'App\\Http\\Controllers\\CategorieController@create',
        'controller' => 'App\\Http\\Controllers\\CategorieController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'categories.store',
        'uses' => 'App\\Http\\Controllers\\CategorieController@store',
        'controller' => 'App\\Http\\Controllers\\CategorieController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'categories.show',
        'uses' => 'App\\Http\\Controllers\\CategorieController@show',
        'controller' => 'App\\Http\\Controllers\\CategorieController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'categories.edit',
        'uses' => 'App\\Http\\Controllers\\CategorieController@edit',
        'controller' => 'App\\Http\\Controllers\\CategorieController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'categories.update',
        'uses' => 'App\\Http\\Controllers\\CategorieController@update',
        'controller' => 'App\\Http\\Controllers\\CategorieController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'categories.destroy',
        'uses' => 'App\\Http\\Controllers\\CategorieController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategorieController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vmW5LVbhBPwpANUw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categories/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\CategorieController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\CategorieController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vmW5LVbhBPwpANUw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'units.index',
        'uses' => 'App\\Http\\Controllers\\UnitsController@index',
        'controller' => 'App\\Http\\Controllers\\UnitsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/units/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'units.create',
        'uses' => 'App\\Http\\Controllers\\UnitsController@create',
        'controller' => 'App\\Http\\Controllers\\UnitsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'units.store',
        'uses' => 'App\\Http\\Controllers\\UnitsController@store',
        'controller' => 'App\\Http\\Controllers\\UnitsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'units.show',
        'uses' => 'App\\Http\\Controllers\\UnitsController@show',
        'controller' => 'App\\Http\\Controllers\\UnitsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/units/{unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'units.edit',
        'uses' => 'App\\Http\\Controllers\\UnitsController@edit',
        'controller' => 'App\\Http\\Controllers\\UnitsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'units.update',
        'uses' => 'App\\Http\\Controllers\\UnitsController@update',
        'controller' => 'App\\Http\\Controllers\\UnitsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'units.destroy',
        'uses' => 'App\\Http\\Controllers\\UnitsController@destroy',
        'controller' => 'App\\Http\\Controllers\\UnitsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RUHeDCaMM1GFKXDk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_sub_units_by_base',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UnitsController@Get_Units_SubBase',
        'controller' => 'App\\Http\\Controllers\\UnitsController@Get_Units_SubBase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RUHeDCaMM1GFKXDk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rQCp0wRdbaT7JIC0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UnitsController@Get_sales_units',
        'controller' => 'App\\Http\\Controllers\\UnitsController@Get_sales_units',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rQCp0wRdbaT7JIC0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'brands.index',
        'uses' => 'App\\Http\\Controllers\\BrandsController@index',
        'controller' => 'App\\Http\\Controllers\\BrandsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'brands.create',
        'uses' => 'App\\Http\\Controllers\\BrandsController@create',
        'controller' => 'App\\Http\\Controllers\\BrandsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'brands.store',
        'uses' => 'App\\Http\\Controllers\\BrandsController@store',
        'controller' => 'App\\Http\\Controllers\\BrandsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'brands.show',
        'uses' => 'App\\Http\\Controllers\\BrandsController@show',
        'controller' => 'App\\Http\\Controllers\\BrandsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/brands/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'brands.edit',
        'uses' => 'App\\Http\\Controllers\\BrandsController@edit',
        'controller' => 'App\\Http\\Controllers\\BrandsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'brands.update',
        'uses' => 'App\\Http\\Controllers\\BrandsController@update',
        'controller' => 'App\\Http\\Controllers\\BrandsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'brands.destroy',
        'uses' => 'App\\Http\\Controllers\\BrandsController@destroy',
        'controller' => 'App\\Http\\Controllers\\BrandsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jd73ZmgnN4ZHBGt6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/brands/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandsController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\BrandsController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Jd73ZmgnN4ZHBGt6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'currencies.index',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/currencies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'currencies.create',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@create',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'currencies.store',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'currencies.show',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@show',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/currencies/{currency}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'currencies.edit',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@edit',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'currencies.update',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/currencies/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'currencies.destroy',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@destroy',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nnn3tbGpxWvY2Sn7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/currencies/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\CurrencyController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Nnn3tbGpxWvY2Sn7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/warehouses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'warehouses.index',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@index',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/warehouses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'warehouses.create',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@create',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/warehouses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'warehouses.store',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@store',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/warehouses/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'warehouses.show',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@show',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/warehouses/{warehouse}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'warehouses.edit',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@edit',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/warehouses/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'warehouses.update',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@update',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/warehouses/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'warehouses.destroy',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@destroy',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PWzMT3fwITyYe9el' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/warehouses/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\WarehouseController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PWzMT3fwITyYe9el',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchases.index',
        'uses' => 'App\\Http\\Controllers\\PurchasesController@index',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/purchases/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchases.create',
        'uses' => 'App\\Http\\Controllers\\PurchasesController@create',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchases.store',
        'uses' => 'App\\Http\\Controllers\\PurchasesController@store',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchases.show',
        'uses' => 'App\\Http\\Controllers\\PurchasesController@show',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/purchases/{purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchases.edit',
        'uses' => 'App\\Http\\Controllers\\PurchasesController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchases.update',
        'uses' => 'App\\Http\\Controllers\\PurchasesController@update',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchases.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchasesController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QCYCQj5wbj7O5NRJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_payments_by_purchase/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@Get_Payments',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@Get_Payments',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QCYCQj5wbj7O5NRJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BlfFizEeMwVDr2TG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/purchase_send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@Send_Email',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@Send_Email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BlfFizEeMwVDr2TG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JHQutq8B2IUObp0N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/purchase_send_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JHQutq8B2IUObp0N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GBgIAeHA8jfEMTav' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/purchases_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GBgIAeHA8jfEMTav',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V158uoKdpFctxM9W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_Products_by_purchase/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@get_Products_by_purchase',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@get_Products_by_purchase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::V158uoKdpFctxM9W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ie32ThPZbRtCASV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/purchase_send_whatsapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@purchase_send_whatsapp',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@purchase_send_whatsapp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1ie32ThPZbRtCASV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rIW30KeHjCchMmnu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_import_purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@get_import_purchases',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@get_import_purchases',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rIW30KeHjCchMmnu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NMctwSo43YCzB1Qt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store_import_purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@store_import_purchases',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@store_import_purchases',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NMctwSo43YCzB1Qt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_purchase.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_purchase.index',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_purchase.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_purchase/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_purchase.create',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_purchase.store',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_purchase.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_purchase/{payment_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_purchase.show',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_purchase/{payment_purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_purchase.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/payment_purchase/{payment_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_purchase.update',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/payment_purchase/{payment_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_purchase.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XX16kY4bHcRLCMur' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_purchase_get_number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@getNumberOrder',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@getNumberOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XX16kY4bHcRLCMur',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CgR0Ly5w9n640LjN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment_purchase_send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@SendEmail',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@SendEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CgR0Ly5w9n640LjN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fpdNLObkrVxlpm0d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment_purchase_send_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fpdNLObkrVxlpm0d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sales.index',
        'uses' => 'App\\Http\\Controllers\\SalesController@index',
        'controller' => 'App\\Http\\Controllers\\SalesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sales.create',
        'uses' => 'App\\Http\\Controllers\\SalesController@create',
        'controller' => 'App\\Http\\Controllers\\SalesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sales.store',
        'uses' => 'App\\Http\\Controllers\\SalesController@store',
        'controller' => 'App\\Http\\Controllers\\SalesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sales.show',
        'uses' => 'App\\Http\\Controllers\\SalesController@show',
        'controller' => 'App\\Http\\Controllers\\SalesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sales/{sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sales.edit',
        'uses' => 'App\\Http\\Controllers\\SalesController@edit',
        'controller' => 'App\\Http\\Controllers\\SalesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sales.update',
        'uses' => 'App\\Http\\Controllers\\SalesController@update',
        'controller' => 'App\\Http\\Controllers\\SalesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sales.destroy',
        'uses' => 'App\\Http\\Controllers\\SalesController@destroy',
        'controller' => 'App\\Http\\Controllers\\SalesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Phv4IOyL6Y7wpl0c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/convert_to_sale_data/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@Elemens_Change_To_Sale',
        'controller' => 'App\\Http\\Controllers\\SalesController@Elemens_Change_To_Sale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Phv4IOyL6Y7wpl0c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KFBTm9Ap5I8weZJV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_payments_by_sale/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@Payments_Sale',
        'controller' => 'App\\Http\\Controllers\\SalesController@Payments_Sale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KFBTm9Ap5I8weZJV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6d3oCElSTzt1LdSe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sales_send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@Send_Email',
        'controller' => 'App\\Http\\Controllers\\SalesController@Send_Email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6d3oCElSTzt1LdSe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BDPL2N9c8fcQj0Zq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sales_send_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\SalesController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BDPL2N9c8fcQj0Zq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tZ9U1sNg14aRtbsi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sales_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\SalesController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tZ9U1sNg14aRtbsi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EnOz3N6gEqnEHdHG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_Products_by_sale/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@get_Products_by_sale',
        'controller' => 'App\\Http\\Controllers\\SalesController@get_Products_by_sale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EnOz3N6gEqnEHdHG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QCeQhmznk5Ak5ZC8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sales_send_whatsapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@sales_send_whatsapp',
        'controller' => 'App\\Http\\Controllers\\SalesController@sales_send_whatsapp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QCeQhmznk5Ak5ZC8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Aacl72E5Aa32dqBR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_today_sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@get_today_sales',
        'controller' => 'App\\Http\\Controllers\\SalesController@get_today_sales',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Aacl72E5Aa32dqBR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'shipments.index',
        'uses' => 'App\\Http\\Controllers\\ShipmentController@index',
        'controller' => 'App\\Http\\Controllers\\ShipmentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'shipments.create',
        'uses' => 'App\\Http\\Controllers\\ShipmentController@create',
        'controller' => 'App\\Http\\Controllers\\ShipmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'shipments.store',
        'uses' => 'App\\Http\\Controllers\\ShipmentController@store',
        'controller' => 'App\\Http\\Controllers\\ShipmentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipments/{shipment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'shipments.show',
        'uses' => 'App\\Http\\Controllers\\ShipmentController@show',
        'controller' => 'App\\Http\\Controllers\\ShipmentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipments/{shipment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'shipments.edit',
        'uses' => 'App\\Http\\Controllers\\ShipmentController@edit',
        'controller' => 'App\\Http\\Controllers\\ShipmentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/shipments/{shipment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'shipments.update',
        'uses' => 'App\\Http\\Controllers\\ShipmentController@update',
        'controller' => 'App\\Http\\Controllers\\ShipmentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/shipments/{shipment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'shipments.destroy',
        'uses' => 'App\\Http\\Controllers\\ShipmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\ShipmentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_sale.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_sale.index',
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_sale.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_sale/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_sale.create',
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_sale.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment_sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_sale.store',
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_sale.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_sale/{payment_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_sale.show',
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_sale.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_sale/{payment_sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_sale.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/payment_sale/{payment_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_sale.update',
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_sale.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/payment_sale/{payment_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'payment_sale.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m879g8WnhjWW7sfQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_sale_get_number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@getNumberOrder',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@getNumberOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::m879g8WnhjWW7sfQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v2x49cvzAb7tqvUZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment_sale_send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@SendEmail',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@SendEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::v2x49cvzAb7tqvUZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aOt4HoIWxECLgpPE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment_sale_send_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aOt4HoIWxECLgpPE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses.index',
        'uses' => 'App\\Http\\Controllers\\ExpensesController@index',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses.create',
        'uses' => 'App\\Http\\Controllers\\ExpensesController@create',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses.store',
        'uses' => 'App\\Http\\Controllers\\ExpensesController@store',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses.show',
        'uses' => 'App\\Http\\Controllers\\ExpensesController@show',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses/{expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses.edit',
        'uses' => 'App\\Http\\Controllers\\ExpensesController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses.update',
        'uses' => 'App\\Http\\Controllers\\ExpensesController@update',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpensesController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VmWwoLq5n3NwUeWI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/expenses_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpensesController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\ExpensesController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VmWwoLq5n3NwUeWI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses_category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses_category.index',
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses_category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses_category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses_category.create',
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses_category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/expenses_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses_category.store',
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses_category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses_category/{expenses_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses_category.show',
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses_category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/expenses_category/{expenses_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses_category.edit',
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses_category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/expenses_category/{expenses_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses_category.update',
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses_category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/expenses_category/{expenses_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'expenses_category.destroy',
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nHDgwMLtDyeLOIUG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/expenses_category_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryExpenseController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\CategoryExpenseController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nHDgwMLtDyeLOIUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'accounts.index',
        'uses' => 'App\\Http\\Controllers\\AccountController@index',
        'controller' => 'App\\Http\\Controllers\\AccountController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/accounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'accounts.create',
        'uses' => 'App\\Http\\Controllers\\AccountController@create',
        'controller' => 'App\\Http\\Controllers\\AccountController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'accounts.store',
        'uses' => 'App\\Http\\Controllers\\AccountController@store',
        'controller' => 'App\\Http\\Controllers\\AccountController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'accounts.show',
        'uses' => 'App\\Http\\Controllers\\AccountController@show',
        'controller' => 'App\\Http\\Controllers\\AccountController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/accounts/{account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'accounts.edit',
        'uses' => 'App\\Http\\Controllers\\AccountController@edit',
        'controller' => 'App\\Http\\Controllers\\AccountController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'accounts.update',
        'uses' => 'App\\Http\\Controllers\\AccountController@update',
        'controller' => 'App\\Http\\Controllers\\AccountController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'accounts.destroy',
        'uses' => 'App\\Http\\Controllers\\AccountController@destroy',
        'controller' => 'App\\Http\\Controllers\\AccountController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3AAUDSWYs1peeWV0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/accounts_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\AccountController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3AAUDSWYs1peeWV0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer_money.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfer_money',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfer_money.index',
        'uses' => 'App\\Http\\Controllers\\TransferMoneyController@index',
        'controller' => 'App\\Http\\Controllers\\TransferMoneyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer_money.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfer_money/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfer_money.create',
        'uses' => 'App\\Http\\Controllers\\TransferMoneyController@create',
        'controller' => 'App\\Http\\Controllers\\TransferMoneyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer_money.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/transfer_money',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfer_money.store',
        'uses' => 'App\\Http\\Controllers\\TransferMoneyController@store',
        'controller' => 'App\\Http\\Controllers\\TransferMoneyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer_money.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfer_money/{transfer_money}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfer_money.show',
        'uses' => 'App\\Http\\Controllers\\TransferMoneyController@show',
        'controller' => 'App\\Http\\Controllers\\TransferMoneyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer_money.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfer_money/{transfer_money}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfer_money.edit',
        'uses' => 'App\\Http\\Controllers\\TransferMoneyController@edit',
        'controller' => 'App\\Http\\Controllers\\TransferMoneyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer_money.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/transfer_money/{transfer_money}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfer_money.update',
        'uses' => 'App\\Http\\Controllers\\TransferMoneyController@update',
        'controller' => 'App\\Http\\Controllers\\TransferMoneyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer_money.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/transfer_money/{transfer_money}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfer_money.destroy',
        'uses' => 'App\\Http\\Controllers\\TransferMoneyController@destroy',
        'controller' => 'App\\Http\\Controllers\\TransferMoneyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits.index',
        'uses' => 'App\\Http\\Controllers\\DepositsController@index',
        'controller' => 'App\\Http\\Controllers\\DepositsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits.create',
        'uses' => 'App\\Http\\Controllers\\DepositsController@create',
        'controller' => 'App\\Http\\Controllers\\DepositsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deposits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits.store',
        'uses' => 'App\\Http\\Controllers\\DepositsController@store',
        'controller' => 'App\\Http\\Controllers\\DepositsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits/{deposit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits.show',
        'uses' => 'App\\Http\\Controllers\\DepositsController@show',
        'controller' => 'App\\Http\\Controllers\\DepositsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits/{deposit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits.edit',
        'uses' => 'App\\Http\\Controllers\\DepositsController@edit',
        'controller' => 'App\\Http\\Controllers\\DepositsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/deposits/{deposit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits.update',
        'uses' => 'App\\Http\\Controllers\\DepositsController@update',
        'controller' => 'App\\Http\\Controllers\\DepositsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/deposits/{deposit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits.destroy',
        'uses' => 'App\\Http\\Controllers\\DepositsController@destroy',
        'controller' => 'App\\Http\\Controllers\\DepositsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QCY4eXGtnMTs9hgp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deposits_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\DepositsController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\DepositsController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QCY4eXGtnMTs9hgp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits_category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits_category.index',
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@index',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits_category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits_category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits_category.create',
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@create',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits_category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deposits_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits_category.store',
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@store',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits_category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits_category/{deposits_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits_category.show',
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@show',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits_category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deposits_category/{deposits_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits_category.edit',
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@edit',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits_category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/deposits_category/{deposits_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits_category.update',
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@update',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deposits_category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/deposits_category/{deposits_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'deposits_category.destroy',
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IDdhW0WgzSStPG22' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deposits_category_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryDepositController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\CategoryDepositController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IDdhW0WgzSStPG22',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'quotations.index',
        'uses' => 'App\\Http\\Controllers\\QuotationsController@index',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quotations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'quotations.create',
        'uses' => 'App\\Http\\Controllers\\QuotationsController@create',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'quotations.store',
        'uses' => 'App\\Http\\Controllers\\QuotationsController@store',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'quotations.show',
        'uses' => 'App\\Http\\Controllers\\QuotationsController@show',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quotations/{quotation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'quotations.edit',
        'uses' => 'App\\Http\\Controllers\\QuotationsController@edit',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'quotations.update',
        'uses' => 'App\\Http\\Controllers\\QuotationsController@update',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'quotations.destroy',
        'uses' => 'App\\Http\\Controllers\\QuotationsController@destroy',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ypOa7KTTmT21NFBn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quotations_send_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationsController@SendEmail',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@SendEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ypOa7KTTmT21NFBn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1mnz92aSYxjMgKYj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quotations_send_sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationsController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1mnz92aSYxjMgKYj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PmMLI7WErx61lKGv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quotations_delete_by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationsController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PmMLI7WErx61lKGv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CwkOWsOibRYlRN2W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/quotation_send_whatsapp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationsController@quotation_send_whatsapp',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@quotation_send_whatsapp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CwkOWsOibRYlRN2W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sale.index',
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@index',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/sale/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sale.create',
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@create',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sale.store',
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@store',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/sale/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sale.show',
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@show',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/sale/{sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sale.edit',
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/returns/sale/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sale.update',
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@update',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/returns/sale/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'sale.destroy',
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6sl6icX3AsfLuc0R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/sale/send/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@Send_Email',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@Send_Email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6sl6icX3AsfLuc0R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sjkwRT0lzrUU7mJg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/sale/send/sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sjkwRT0lzrUU7mJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hizrDRlmwXKDAlar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/sale/payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@Payment_Returns',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@Payment_Returns',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hizrDRlmwXKDAlar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NyQ6SRpjSiqEbHvv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/sale/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NyQ6SRpjSiqEbHvv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nRKkYzjOWTMvFY4K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/sale/create_sell_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@create_sell_return',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@create_sell_return',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nRKkYzjOWTMvFY4K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LQJxOkUbDLKSBs4I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/sale/edit_sell_return/{id}/{sale_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@edit_sell_return',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@edit_sell_return',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LQJxOkUbDLKSBs4I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchase.index',
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@index',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/purchase/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchase.create',
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@create',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchase.store',
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@store',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/purchase/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchase.show',
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@show',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/purchase/{purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchase.edit',
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/returns/purchase/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchase.update',
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@update',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/returns/purchase/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'purchase.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/returns',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k7halpmnCTghRZlc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/purchase/send/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@Send_Email',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@Send_Email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::k7halpmnCTghRZlc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B4nyrxTWsbd81YAt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/purchase/send/sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::B4nyrxTWsbd81YAt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DbNPoEiXwABe3TKR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/purchase/payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@Payment_Returns',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@Payment_Returns',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DbNPoEiXwABe3TKR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ipXQpFFZdGC10WyH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/returns/purchase/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ipXQpFFZdGC10WyH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DyyOyTRoG6m107hU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/purchase/create_purchase_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@create_purchase_return',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@create_purchase_return',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DyyOyTRoG6m107hU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iJVlCNBrIa2aE3NN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/returns/purchase/edit_purchase_return/{id}/{purchase_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@edit_purchase_return',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@edit_purchase_return',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::iJVlCNBrIa2aE3NN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_sale.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_sale.index',
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_sale.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_sale/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_sale.create',
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_sale.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment/returns_sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_sale.store',
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_sale.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_sale/{returns_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_sale.show',
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_sale.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_sale/{returns_sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_sale.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/payment/returns_sale/{returns_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_sale.update',
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_sale.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/payment/returns_sale/{returns_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_sale.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YACkFkA8UlsbBaQ3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_sale/Number/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@getNumberOrder',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@getNumberOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YACkFkA8UlsbBaQ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gItNDfxhxCRb1p2p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment/returns_sale/send/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@SendEmail',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@SendEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gItNDfxhxCRb1p2p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v5j8mX9L1kftVWx8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment/returns_sale/send/sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::v5j8mX9L1kftVWx8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_purchase.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_purchase.index',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_purchase.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_purchase/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_purchase.create',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment/returns_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_purchase.store',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_purchase.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_purchase/{returns_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_purchase.show',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_purchase/{returns_purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_purchase.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/payment/returns_purchase/{returns_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_purchase.update',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'returns_purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/payment/returns_purchase/{returns_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'returns_purchase.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LZsLgTZcAFqIrfD7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/returns_purchase/Number/Order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@getNumberOrder',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@getNumberOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LZsLgTZcAFqIrfD7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uR3fuYAeoEITH3cT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment/returns_purchase/send/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@SendEmail',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@SendEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uR3fuYAeoEITH3cT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::weLrQig9Udv8XATw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment/returns_purchase/send/sms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@Send_SMS',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@Send_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::weLrQig9Udv8XATw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adjustments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'adjustments.index',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@index',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adjustments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'adjustments.create',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@create',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/adjustments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'adjustments.store',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@store',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adjustments/{adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'adjustments.show',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@show',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adjustments/{adjustment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'adjustments.edit',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@edit',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/adjustments/{adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'adjustments.update',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@update',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/adjustments/{adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'adjustments.destroy',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nZCNRCnSBenzf9X5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adjustments/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@Adjustment_detail',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@Adjustment_detail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nZCNRCnSBenzf9X5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cqWTtSllBC5dqfoT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/adjustments/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::cqWTtSllBC5dqfoT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfers.index',
        'uses' => 'App\\Http\\Controllers\\TransferController@index',
        'controller' => 'App\\Http\\Controllers\\TransferController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfers.create',
        'uses' => 'App\\Http\\Controllers\\TransferController@create',
        'controller' => 'App\\Http\\Controllers\\TransferController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfers.store',
        'uses' => 'App\\Http\\Controllers\\TransferController@store',
        'controller' => 'App\\Http\\Controllers\\TransferController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfers/{transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfers.show',
        'uses' => 'App\\Http\\Controllers\\TransferController@show',
        'controller' => 'App\\Http\\Controllers\\TransferController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/transfers/{transfer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfers.edit',
        'uses' => 'App\\Http\\Controllers\\TransferController@edit',
        'controller' => 'App\\Http\\Controllers\\TransferController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/transfers/{transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfers.update',
        'uses' => 'App\\Http\\Controllers\\TransferController@update',
        'controller' => 'App\\Http\\Controllers\\TransferController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/transfers/{transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'transfers.destroy',
        'uses' => 'App\\Http\\Controllers\\TransferController@destroy',
        'controller' => 'App\\Http\\Controllers\\TransferController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oybpdWdz1234eDzv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/transfers/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\TransferController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oybpdWdz1234eDzv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EKi1WCEH3V21VK0D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_user_auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@GetUserAuth',
        'controller' => 'App\\Http\\Controllers\\UserController@GetUserAuth',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EKi1WCEH3V21VK0D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'users.create',
        'uses' => 'App\\Http\\Controllers\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\UserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'users.store',
        'uses' => 'App\\Http\\Controllers\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'users.edit',
        'uses' => 'App\\Http\\Controllers\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'users.update',
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x1lNbfMvwpw6Ls1a' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/users_switch_activated/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@IsActivated',
        'controller' => 'App\\Http\\Controllers\\UserController@IsActivated',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::x1lNbfMvwpw6Ls1a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::evbwFdNBTgAxqsRb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Get_user_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@GetInfoProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@GetInfoProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::evbwFdNBTgAxqsRb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HnaiNX5COzYh5zHk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update_user_profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\UserController@updateProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HnaiNX5COzYh5zHk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'roles.index',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@index',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'roles.create',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@create',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'roles.store',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@store',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'roles.show',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@show',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'roles.edit',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@edit',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'roles.update',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@update',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'roles.destroy',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@destroy',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_page.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles/check/create_page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'create_page.index',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@index',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/roles/check',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_page.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles/check/create_page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'create_page.create',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@create',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/roles/check',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/roles/check/create_page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'create_page.store',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@store',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/roles/check',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_page.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles/check/create_page/{create_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'create_page.show',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@show',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/roles/check',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/roles/check/create_page/{create_page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'create_page.edit',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@edit',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/roles/check',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_page.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/roles/check/create_page/{create_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'create_page.update',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@update',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/roles/check',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_page.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/roles/check/create_page/{create_page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'create_page.destroy',
        'uses' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@destroy',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@Check_Create_Page@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/roles/check',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hrsflaREaaRA1n58' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/roles/delete/by_selection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissionsController@delete_by_selection',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@delete_by_selection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hrsflaREaaRA1n58',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'settings.index',
        'uses' => 'App\\Http\\Controllers\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\SettingsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'settings.create',
        'uses' => 'App\\Http\\Controllers\\SettingsController@create',
        'controller' => 'App\\Http\\Controllers\\SettingsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'settings.store',
        'uses' => 'App\\Http\\Controllers\\SettingsController@store',
        'controller' => 'App\\Http\\Controllers\\SettingsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'settings.show',
        'uses' => 'App\\Http\\Controllers\\SettingsController@show',
        'controller' => 'App\\Http\\Controllers\\SettingsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'settings.edit',
        'uses' => 'App\\Http\\Controllers\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\SettingsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'settings.update',
        'uses' => 'App\\Http\\Controllers\\SettingsController@update',
        'controller' => 'App\\Http\\Controllers\\SettingsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'as' => 'settings.destroy',
        'uses' => 'App\\Http\\Controllers\\SettingsController@destroy',
        'controller' => 'App\\Http\\Controllers\\SettingsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::icCW7uXTHj3sZlYd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_Settings_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@getSettings',
        'controller' => 'App\\Http\\Controllers\\SettingsController@getSettings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::icCW7uXTHj3sZlYd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5zWklGqkQuFuE8UU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/pos_settings/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@update_pos_settings',
        'controller' => 'App\\Http\\Controllers\\SettingsController@update_pos_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5zWklGqkQuFuE8UU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LhjLxIsvBNidrSIT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_pos_Settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingsController@get_pos_Settings',
        'controller' => 'App\\Http\\Controllers\\SettingsController@get_pos_Settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LhjLxIsvBNidrSIT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BOIEdCHlfD6Sd1Mi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update_config_mail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\MailSettingsController@update_config_mail',
        'controller' => 'App\\Http\\Controllers\\MailSettingsController@update_config_mail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BOIEdCHlfD6Sd1Mi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PCBWNeAslNOtUcSv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_config_mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\MailSettingsController@get_config_mail',
        'controller' => 'App\\Http\\Controllers\\MailSettingsController@get_config_mail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PCBWNeAslNOtUcSv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kSNpaVBG2huOHGoI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_sms_config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Sms_SettingsController@get_sms_config',
        'controller' => 'App\\Http\\Controllers\\Sms_SettingsController@get_sms_config',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kSNpaVBG2huOHGoI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XhAXMVTH8z4RS6XB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_twilio_config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Sms_SettingsController@update_twilio_config',
        'controller' => 'App\\Http\\Controllers\\Sms_SettingsController@update_twilio_config',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XhAXMVTH8z4RS6XB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z8bkW8546HehIAuL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_nexmo_config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Sms_SettingsController@update_nexmo_config',
        'controller' => 'App\\Http\\Controllers\\Sms_SettingsController@update_nexmo_config',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::z8bkW8546HehIAuL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::saoF958YN1lztDNY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_infobip_config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Sms_SettingsController@update_infobip_config',
        'controller' => 'App\\Http\\Controllers\\Sms_SettingsController@update_infobip_config',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::saoF958YN1lztDNY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sEQlYPcNQR0c4AMb' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update_Default_SMS',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Sms_SettingsController@update_Default_SMS',
        'controller' => 'App\\Http\\Controllers\\Sms_SettingsController@update_Default_SMS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sEQlYPcNQR0c4AMb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y2CNGiD2rIuqEd9F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_sms_template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Notifications_Template@get_sms_template',
        'controller' => 'App\\Http\\Controllers\\Notifications_Template@get_sms_template',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Y2CNGiD2rIuqEd9F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6EiR825D7ME20fbi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update_sms_body',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Notifications_Template@update_sms_body',
        'controller' => 'App\\Http\\Controllers\\Notifications_Template@update_sms_body',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6EiR825D7ME20fbi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bi3Y4rDnItJh36fI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_emails_template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Notifications_Template@get_emails_template',
        'controller' => 'App\\Http\\Controllers\\Notifications_Template@get_emails_template',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Bi3Y4rDnItJh36fI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hmqRKsb2d2EGKM34' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/update_custom_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Notifications_Template@update_custom_email',
        'controller' => 'App\\Http\\Controllers\\Notifications_Template@update_custom_email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hmqRKsb2d2EGKM34',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v70U2gX1A8l0jrsC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment_gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment_gateway_SettingsController@Update_payment_gateway',
        'controller' => 'App\\Http\\Controllers\\Payment_gateway_SettingsController@Update_payment_gateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::v70U2gX1A8l0jrsC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xzT6LaN3qN2BVAD3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_payment_gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment_gateway_SettingsController@Get_payment_gateway',
        'controller' => 'App\\Http\\Controllers\\Payment_gateway_SettingsController@Get_payment_gateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xzT6LaN3qN2BVAD3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mM0iNg1q3PVHAbAd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_version_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UpdateController@get_version_info',
        'controller' => 'App\\Http\\Controllers\\UpdateController@get_version_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mM0iNg1q3PVHAbAd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4B7XrmhVthoReyku' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\BackupController@Get_Backup',
        'controller' => 'App\\Http\\Controllers\\BackupController@Get_Backup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4B7XrmhVthoReyku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SX0GMkRPQPLA3kz2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/generate_new_backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\BackupController@Generate_Backup',
        'controller' => 'App\\Http\\Controllers\\BackupController@Generate_Backup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SX0GMkRPQPLA3kz2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WUIIr5qigwnwBy8g' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/delete_backup/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\BackupController@Delete_Backup',
        'controller' => 'App\\Http\\Controllers\\BackupController@Delete_Backup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WUIIr5qigwnwBy8g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bZ0RLXKKYGh8qbFv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get_modules_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ModuleSettingsController@get_modules_info',
        'controller' => 'App\\Http\\Controllers\\ModuleSettingsController@get_modules_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bZ0RLXKKYGh8qbFv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YrEiIZRGI9clN5or' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_status_module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ModuleSettingsController@update_status_module',
        'controller' => 'App\\Http\\Controllers\\ModuleSettingsController@update_status_module',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YrEiIZRGI9clN5or',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I21wOMnvXfUxeTCa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/upload_module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
          2 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ModuleSettingsController@upload_module',
        'controller' => 'App\\Http\\Controllers\\ModuleSettingsController@upload_module',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::I21wOMnvXfUxeTCa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dfqD3osxgWv0rE5s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sale_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@Sale_PDF',
        'controller' => 'App\\Http\\Controllers\\SalesController@Sale_PDF',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dfqD3osxgWv0rE5s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DW3Dj1HVIWjUq71c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quote_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationsController@Quotation_pdf',
        'controller' => 'App\\Http\\Controllers\\QuotationsController@Quotation_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DW3Dj1HVIWjUq71c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NHue3FrFQH2mofdN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/purchase_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesController@Purchase_pdf',
        'controller' => 'App\\Http\\Controllers\\PurchasesController@Purchase_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NHue3FrFQH2mofdN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bH8isOQ2BxCzE0Kv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/return_sale_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesReturnController@Return_pdf',
        'controller' => 'App\\Http\\Controllers\\SalesReturnController@Return_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bH8isOQ2BxCzE0Kv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UpC9zbP6CqoLGqKL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/return_purchase_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchasesReturnController@Return_pdf',
        'controller' => 'App\\Http\\Controllers\\PurchasesReturnController@Return_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UpC9zbP6CqoLGqKL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lgE8NRD8mtG9TrK5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_purchase_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchasesController@Payment_purchase_pdf',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchasesController@Payment_purchase_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lgE8NRD8mtG9TrK5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4oidM1CbwobOYrnE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_return_sale_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@payment_return',
        'controller' => 'App\\Http\\Controllers\\PaymentSaleReturnsController@payment_return',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4oidM1CbwobOYrnE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BXcvsZd3jjZK3ttY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_return_purchase_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@payment_return',
        'controller' => 'App\\Http\\Controllers\\PaymentPurchaseReturnsController@payment_return',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BXcvsZd3jjZK3ttY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EdfOJHPNhmaujuSX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_sale_pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentSalesController@payment_sale',
        'controller' => 'App\\Http\\Controllers\\PaymentSalesController@payment_sale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EdfOJHPNhmaujuSX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pTphQeFxujxStLA8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sales_print_invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SalesController@Print_Invoice_POS',
        'controller' => 'App\\Http\\Controllers\\SalesController@Print_Invoice_POS',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pTphQeFxujxStLA8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ItswEHyaQ7puhOn4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ItswEHyaQ7puhOn4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RzukkSpNBgZYQKvR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/find/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PasswordResetController@find',
        'controller' => 'App\\Http\\Controllers\\PasswordResetController@find',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RzukkSpNBgZYQKvR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6SjUETebWNFCcciU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'setup/{vue}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:42:"function () {
        \\abort(403);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000de10000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6SjUETebWNFCcciU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::US8OPzv2neIt5uFY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{vue?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'Is_Active',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:512:"function () {
        $installed = \\Illuminate\\Support\\Facades\\Storage::disk(\'public\')->exists(\'installed\');
        $ModulesData = \\App\\Http\\Controllers\\BaseController::get_Module_Info();

        if ($installed === false) {
            return \\redirect(\'/setup\');
        } else {
            return \\view(\'layouts.master\' , [
                \'ModulesInstalled\' => $ModulesData[\'ModulesInstalled\'],
                \'ModulesEnabled\' => $ModulesData[\'ModulesEnabled\'],
            ]);
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000de60000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::US8OPzv2neIt5uFY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'vue' => '^(?!api|setup|update|update_database_module|password|module|store|online_store).*$',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::anq6GW71JU0D23r3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::anq6GW71JU0D23r3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_database_module' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update_database_module/{module_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\ModuleSettingsController@update_database_module',
        'controller' => 'App\\Http\\Controllers\\ModuleSettingsController@update_database_module',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_database_module',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::snhQiCMQPcOsztzt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'Is_Active',
        ),
        'uses' => 'App\\Http\\Controllers\\UpdateController@viewStep1',
        'controller' => 'App\\Http\\Controllers\\UpdateController@viewStep1',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::snhQiCMQPcOsztzt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2qxUxeUojQ7EcWng' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/finish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'Is_Active',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:70:"function () {

        return \\view(\'update.finishedUpdate\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000df00000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2qxUxeUojQ7EcWng',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_lastStep' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update/lastStep',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth:web',
          3 => 'Is_Active',
        ),
        'as' => 'update_lastStep',
        'uses' => 'App\\Http\\Controllers\\UpdateController@lastStep',
        'controller' => 'App\\Http\\Controllers\\UpdateController@lastStep',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
