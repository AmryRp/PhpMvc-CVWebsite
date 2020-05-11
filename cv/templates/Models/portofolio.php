<?php
class portofolio extends Model
{
    public function create($nama, $link,$logo)
    {
        $sql = "INSERT INTO portofolio (nama, deskripsi,gambar) VALUES (:nama, :deskripsi, :gambar)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'gambar'=>$gambar

        ]);
    }

    public function showportofolio($id)
    {
        $sql = "SELECT * FROM portofolio WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllportofolio()
    {
        $sql = "SELECT * FROM portofolio";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $nama, $link,$logo)
    {
        $sql = "UPDATE portofolio SET nama = :nama, deskripsi = :deskripsi , gambar = :gambar WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM portofolio WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>