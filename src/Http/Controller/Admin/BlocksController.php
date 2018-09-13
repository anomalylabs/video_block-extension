<?php namespace Anomaly\VideoBlockExtension\Http\Controller\Admin;

use Anomaly\VideoBlockExtension\Block\Form\BlockFormBuilder;
use Anomaly\VideoBlockExtension\Block\Table\BlockTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class BlocksController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param BlockTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BlockTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BlockFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BlockFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BlockFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BlockFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
