<?php 

class createDoc{
    private $id;
    private $title;
    private $author;
    private $description;
    private $createdOn;
    protected $dbConn;

    function setId($id) { $this->id = $id; }
    function getId() { return $this->id; }
    function setTitle($title) { $this->title = $title; }
    function getTitle() { return $this->title; }
    function setDescription($description) { $this->description = $description; }
    function getDescription() { return $this->description; }
    function setAuthor ($author) { $this->author = $author; }
    function getAuthor() { return $this->author; }
    function setCreatedOn ($createdOn) { $this->createdOn; }

    public function _construct() {
        require_once('DbConnect.php');
        $db = new DbConnect(); 
        $this->dbConn = $db->connect();
    }
    
    public function save() {
        $sql = "INSERT INTO `Docs` (`id`, `title`, `description`, author`
            `createdOn`) VALUES (null,:title,:descp, :author, :cdate)";

        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':descp', $this->description);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':cdate', $this->createdOn);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update() {
    }
    public function getArticleById() {
    }
    public function getAlldocs() {
        $stmt = $this->dbConn->prepare("SELECT * FROM documents");
        $stmt->execute();
        $docs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $docs;
    }

}
