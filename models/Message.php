<?php 

class Message {
    public static function findAll($count) {
        //Выполнить подключение к БД
        $db = \Components\Dbconnector::getConnection();
        //Запрос к БД
        $sql = 'SELECT * FROM messages LIMIT :mes_per_page';
        $result = $db->prepare($sql);
        $result->bindParam(':mes_per_page', $count, PDO::PARAM_INT);
        $result->execute();
        //Возврат результатов
        $i = 0;
        $messages = array();     
        while ($row = $result->fetch()) {
            $messages[$i]['id'] = $row['Id'];
            $messages[$i]['name'] = $row['name'];
            $messages[$i]['email'] = $row['email'];
            $messages[$i]['message'] = $row['message'];
            $messages[$i]['date_publication'] = $row['date_publication'];
            $i++;
        }
        return $messages;  
    }
    
    public static function findById($id) { }
    
    public static function sortByDate($id, $count, $page=1) {
        $db = \Components\Dbconnector::getConnection();
        $offset = ($page-1)*$count;
        switch ($id) {
            case 1:
                $sql = 'SELECT * FROM messages ORDER BY date_publication ASC LIMIT :mes_per_page OFFSET :offset';
                break;
            case 2:
                $sql = 'SELECT * FROM messages ORDER BY date_publication DESC LIMIT :mes_per_page OFFSET :offset';
                break;
            default:
                $sql = 'SELECT * FROM messages LIMIT :mes_per_page OFFSET :offset';
                break;
        }
        $result = $db->prepare($sql);
        $result->bindParam(':mes_per_page', $count, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        $result->execute();
        $i = 0;
        $messages = array();     
        while ($row = $result->fetch()) {
            $messages[$i]['id'] = $row['Id'];
            $messages[$i]['name'] = $row['name'];
            $messages[$i]['email'] = $row['email'];
            $messages[$i]['message'] = $row['message'];
            $messages[$i]['date_publication'] = $row['date_publication'];
            $i++;
        }
        return $messages;         
    }
    
    public static function createMessage($params) {
        $db = Components\Dbconnector::getConnection();
        $sql = 'INSERT INTO messages SET '
                . 'date_publication = CURDATE(), '
                . 'email = :email, '
                . 'message = :message, '
                . 'name = :name';
        var_dump($params);
        $result = $db->prepare($sql);
        $result->bindParam(':name', $params['name']);
        $result->bindParam(':email', $params['email']);
        $result->bindParam(':message', $params['message']);
        //var_dump($params['message']); die;
        $result->execute();
    }

    public static function deleteMessage($id) {
        $db = \Components\Dbconnector::getConnection();
        $sql = 'DELETE FROM messages WHERE Id=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result;
    }
    
    public static function getCountMessages() {
        $db = \Components\Dbconnector::getConnection();
        $count = $db->query('SELECT COUNT(*) FROM messages')->fetch();
        $count = (int)$count[0];
        return $count;
    }
}

?>