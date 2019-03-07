<?php
namespace Classes\Formulaire;
 /*
Class FormUtility de :
- Generer le HTML du formulaire
- Effectuer des controles sur les variables POST
*/

class FormUtility
{
    /*
    
    */
    public function generateHTML(
        string $label,
        string $type,
        string $id,
        ? string $placeholder = ""
    ): string {

        //L'eventuel ancienne valeur
        $oldValue = (isset($_POST['$id'])) ? $_POST['id'] : '';

        //On verifie le type pour fournir soit:
        //Un input: text, number
        //Un textarea

        switch ($type) {
            case 'text':

            case 'number':
                $widget =$this->getHTMLInput($type, $id, $oldValue, $placeholder);
                break;
            case 'textarea':
                $widget =$this->getHTMLTextArea($id,$oldValue,$placeholder);
                break;
            default:
                die('Le type donné est inconnu');
        }

        return  <<<EOT
<div class="form-group">
    <label for="$id">$label</label>
      $widget
</div>

EOT;
    }

    private function getHTMLInput(
        string $type,
        string $id,
        ? string $placeholder = '',
        string $oldValue
    ){
return <<<EOT
<input type="$type" id="$id" name="$id" class="form-control"
placeholder="$placeholder" value="$oldValue" />
EOT;
    }

    private function getHTMLTextArea(string $id, string $oldValue, ?string $placeholder = ''): string {
        return <<<EOT
<textarea name="$id" id="$id" class="form-control" placeholder="$placeholder">
    $oldValue
</textarea>
EOT;
    }
}
