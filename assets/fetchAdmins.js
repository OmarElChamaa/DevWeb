public function requiredAdmin($usr,$mdp) {
     $stmt = $this->pdo->query('SELECT name, password '
                . 'FROM admins');
        $projects = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $projects[] = [
                'project_id' => $row['name'],
                'project_name' => $row['password']
            ];
        }
        return $projects;

}