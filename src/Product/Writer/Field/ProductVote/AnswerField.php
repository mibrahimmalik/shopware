<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductVote;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\TextField;

class AnswerField extends TextField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('answer', 'answer', 'product_vote', $constraintBuilder);
    }
}