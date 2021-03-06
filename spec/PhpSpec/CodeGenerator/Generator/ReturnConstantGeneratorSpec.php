<?php

namespace spec\PhpSpec\CodeGenerator\Generator;

use PhpSpec\CodeGenerator\TemplateRenderer;
use PhpSpec\Console\IO;
use PhpSpec\ObjectBehavior;
use PhpSpec\Util\Filesystem;
use Prophecy\Argument;
use PhpSpec\Locator\ResourceInterface;

class ReturnConstantGeneratorSpec extends ObjectBehavior
{
    function let(IO $io, TemplateRenderer $templates, Filesystem $filesystem)
    {
        $this->beConstructedWith($io, $templates, $filesystem);
    }

    function it_is_a_generator()
    {
        $this->shouldHaveType('PhpSpec\CodeGenerator\Generator\GeneratorInterface');
    }

    function it_has_priority_zero()
    {
        $this->getPriority()->shouldReturn(0);
    }

    function it_supports_returnConstant_generation(ResourceInterface $resource)
    {
        $this->supports($resource, 'returnConstant', array())->shouldReturn(true);
    }
}
