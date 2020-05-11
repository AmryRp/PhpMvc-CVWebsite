<?php
class skill extends Model
{
    public function create($nama, $link,$logo)
    {
        $sql = "INSERT INTO skill (nama, deskripsi,logo,mastering) VALUES (:nama, :deskripsi, :logo, :mastering)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'logo'=>$logo,
            'mastering'=>$mastering

        ]);
    }

    public function showskill($id)
    {
        $sql = "SELECT * FROM skill WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllskill()
    {
        $sql = "SELECT * FROM skill";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $nama, $link,$logo)
    {
        $sql = "UPDATE skill SET nama = :nama, deskripsi = :deskripsi , logo = :logo,mastering = :mastering WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'logo' => $logo,
            'mastering' => $mastering
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM skill WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>