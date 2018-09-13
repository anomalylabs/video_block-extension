<?php namespace Anomaly\VideoBlockExtension\Block;

use Anomaly\Streams\Platform\Model\VideoBlock\VideoBlockBlocksEntryModel;
use Anomaly\VideoBlockExtension\Block\Contract\BlockInterface;

/**
 * Class BlockModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BlockModel extends VideoBlockBlocksEntryModel implements BlockInterface
{

    /**
     * Eager load these relations.
     *
     * @var array
     */
    protected $with = [
        'cover',
    ];
}
