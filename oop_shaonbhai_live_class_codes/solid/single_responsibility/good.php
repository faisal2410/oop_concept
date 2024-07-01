<?php

class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2016-04-21';
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}

interface Formatter
{
    public function format(Report $report);
}

class JsonReportFormatter implements Formatter
{
    public function format(Report $report)
    {
        return json_encode($report->getContents());
    }
}

$report = new Report();
$formatter = new JsonReportFormatter();
$formatter->format($report);