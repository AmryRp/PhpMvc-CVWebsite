<?php
class jasa extends Model
{
    public function create($nama, $link,$logo)
    {
        $sql = "INSERT INTO jasa (nama, deskripsi,logo,harga) VALUES (:nama, :link, :logo,:harga)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'logo'=>$logo,
            'harga'=>$harga
        ]);
    }

    public function showjasa($id)
    {
        $sql = "SELECT * FROM jasa WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAlljasa()
    {
        $sql = "SELECT * FROM jasa";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $nama, $link,$logo)
    {
        $sql = "UPDATE jasa SET nama = :nama, deskripsi = :deskripsi , logo = :logo, harga = :harga WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'logo' => $logo,
            'harga' => $harga

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM jasa WHERE id = ?';
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>