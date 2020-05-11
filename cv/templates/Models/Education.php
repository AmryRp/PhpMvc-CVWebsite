<?php
class Education extends Model
{
    public function create($nama, $link,$logo)
    {
        $sql = "INSERT INTO education (nama, jurusan, mulai,selesai,gpa,logo) VALUES (:nama, :jurusan,:mulai, :selesai,:gpa, :logo)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'nama' => $nama,
            'jurusan' => $jurusan,
            'mulai' => $mulai,//parsing
            'selesai' => $selesai,//parsing
            'gpa' => $gpa,
            'logo'=>$logo

        ]);
    }

    public function showEducation($id)
    {
        $sql = "SELECT * FROM education WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllEducation()
    {
        $sql = "SELECT * FROM education";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $nama, $link,$logo)
    {
        $sql = "UPDATE education SET nama = :nama, jurusan = :jurusan , mulai = :mulai, selesai = :selesai ,gpa=:gpa,logo=:logo WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'mulai' => $mulai,//parsing
            'selesai' => $selesai,//parsing
            'gpa' => $gpa,
            'logo'=>$logo

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM education WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>