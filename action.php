<?php

require_once 'vendor/autoload.php';

use App\classes\Series;
use App\classes\OddEven;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    } elseif ($_GET['page'] == 'series')
    {
        include "pages/series.php";
    } elseif ($_GET['page'] == 'series-result')
    {
        $series = new Series($_POST);
        $result = $series->series();
        include "pages/series.php";
    } elseif ($_GET['page'] == 'sum-of-series')
    {
        include "pages/sumOfSeries.php";
    } elseif ($_GET['page'] == 'sum-of-series-result')
    {
        $series = new Series($_POST);
        $result = $series->sumOfSeries();
        include "pages/sumOfSeries.php";
    } elseif ($_GET['page'] == 'odd-even')
    {
        include "pages/oddEven.php";
    } elseif ($_GET['page'] == 'odd-even-result')
    {
        $oddEven = new OddEven($_POST);
        $result = $oddEven->getOddEven();
        include "pages/oddEven.php";
    }
}