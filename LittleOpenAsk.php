<?php

declare(strict_types=1);

class LittleOpenAsk extends OpenAsk
{
    /**
     * Affecte l'affichage au visitor.
     *
     * @param IQuizzVisitor $v
     * @return void
     */
    public function render(IQuizzVisitor $v)
    {
        $v->renderLittleOpenAsk($this);
    }
}
