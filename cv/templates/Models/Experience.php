<?php
class Experience extends Model
{
    public function create($nama, $link,$logo)
    {
        $sql = "INSERT INTO experience (nama, deskripsi, mulai,selesai) VALUES (:nama, :jurusan,:mulai, :selesai)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'nama' => $nama,
            'jurusan' => $jurusan,
            'mulai' => $mulai,//parsing
            'selesai' => $selesai

        ]);
    }

    public function showExperience($id)
    {
        $sql = "SELECT * FROM experience WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllExperience()
    {
        $sql = "SELECT * FROM experience";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $nama, $link,$logo)
    {
        $sql = "UPDATE experience SET nama = :nama, jurusan = :jurusan , mulai = :mulai,selesai=:selesai WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'mulai' => $mulai,//parsing
            'selesai' => $selesai

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM experience WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>