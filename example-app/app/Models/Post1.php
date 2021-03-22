<?

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post1 extends Model
{
    public $id;
    public $title,$author,$email;
    public $date,$content,$image;
    function __construct($id,$title,$author,$email,$date,$content,$image)
    {
        $this->id = $id;
        $this->title =$title;
        $this->author=$author;
        $this->email=$email;
        $this->date=$date;
        $this->content=$content;
        $this->image=$image;
    }
}

?>