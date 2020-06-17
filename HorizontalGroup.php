<?php

require_once 'Group.php';

class HorizontalGroup extends Group
{
    /**
     * Affecte l'affichage au visitor.
     *
     * @param IQuizzVisitor $v
     * @return void
     */
    public function render(IQuizzVisitor $v)
    {
        $v->renderHorizontalGroup($this);
    }
}
