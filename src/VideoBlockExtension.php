<?php namespace Anomaly\VideoBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\VideoBlockExtension\Block\BlockModel;

/**
 * Class VideoBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class VideoBlockExtension extends BlockExtension
{

    /**
     * This extension provides a simple video
     * player block for the blocks module,
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.video';

    /**
     * The block content view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.video_block::content';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
