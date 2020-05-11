<?php
class Contact extends Model
{
    public function create($nama, $link,$logo)
    {
        $sql = "INSERT INTO contact (nama, link,logo) VALUES (:nama, :link, :logo)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'nama' => $nama,
            'link' => $link,
            'logo'=>$logo

        ]);
    }

    public function showContact($id)
    {
        $sql = "SELECT * FROM contact WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllTasks()
    {
        $sql = "SELECT * FROM contact";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $nama, $link,$logo)
    {
        $sql = "UPDATE contact SET nama = :nama, link = :link , logo = :logo WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'nama' => $nama,
            'link' => $link,
            'logo' => $logo

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM contact WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>