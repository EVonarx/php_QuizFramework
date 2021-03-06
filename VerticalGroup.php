<?php

require_once 'Group.php';

class VerticalGroup extends Group
{
    /**
     * Affecte l'affichage au visitor.
     *
     * @param IQuizzVisitor $v
     * @return void
     */
    public function render(IQuizzVisitor $v)
    {
        $v->renderVerticalGroup($this);
    }
}
