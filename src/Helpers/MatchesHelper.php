<?php

namespace Redline\League\Helpers;

class MatchesHelper extends BaseHelper
{
    protected $table = 'sql_matches_scoretotal';

    public function getMatches(int $page = 1): array
    {
        print_r($this->db);

        try {
            $query = $this->db->query("SELECT * FROM {$this->table}");
        } catch (\Exception $e) {
            die;
        }

        return $query;
    }
}