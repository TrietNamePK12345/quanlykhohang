<?php
namespace  App\Core;

class TemplateEngine
{
    private static $_content = null;

    public static function run($content, $data = [])
    {
        extract($data);
        if (!empty($content)) {
            self::$_content = $content;
            self::printEntities();
            self::printRaw();
            self::ifCondition();
            self::phpBefore();
            self::phpAfter();
            self::foreachLoop();
            self::forLoop();
            self::whileLoop();
            // echo self::$_content;
            eval("?>".self::$_content."<?php");
        }
    }

    public static function printEntities()
    {
        preg_match_all("~{{\s*(.+?)\s*}}~", self::$_content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?= htmlentities($item)?>", self::$_content);
            }
        }
    }

    public static function printRaw()
    {
        preg_match_all("~{!\s*(.+?)\s*!}~", self::$_content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?= $item ?>", self::$_content);
            }
        }
    }

    public static function ifCondition()
    {
        // if
        preg_match_all("~@if\s*\((.+?)\s*\)\s*$~im", self::$_content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php if($item):?>", self::$_content);
            }
        }

        // else
        preg_match_all("~@else\s*$~im", self::$_content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php else: ?>", self::$_content);
            }
        }

        // elseif
        preg_match_all("~@elseif\s*\((.+?)\s*\)\s*$~im", self::$_content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php elseif($item):?>", self::$_content);
            }
        }

        // endif
        preg_match_all("~@endif\s*$~im", self::$_content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php endif; ?>", self::$_content);
            }
        }
    }

    public static function phpBefore()
    {
        preg_match_all("~@php~is", self::$_content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php", self::$_content);
            }
        }
    }

    public static function phpAfter()
    {
        preg_match_all("~@endphp~is", self::$_content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "?>", self::$_content);
            }
        }
    }

    public static function forLoop()
    {
        // \s*\((.+?)\s*\)\s*$~im
        preg_match_all("~@for\s*\((.+?)\s*\)\s*$~im", self::$_content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php for($item): ?>", self::$_content);
            }
        }

        preg_match_all("~@endfor~is", self::$_content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php endfor; ?>", self::$_content);
            }
        }
    }

    public static function whileLoop()
    {
        // \s*\((.+?)\s*\)\s*$~im
        preg_match_all("~@while\s*\((.+?)\s*\)\s*$~im", self::$_content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php while($item): ?>", self::$_content);
            }
        }

        preg_match_all("~@endwhile~is", self::$_content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php endwhile; ?>", self::$_content);
            }
        }
    }

    public static function foreachLoop()
    {
        preg_match_all("~@foreach\s*\((.+?)\s*\)\s*$~im", self::$_content, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php foreach($item): ?>", self::$_content);
            }
        }

        preg_match_all("~@endforeach~is", self::$_content, $matches);
        if (!empty($matches[0])) {
            foreach ($matches[0] as $key => $item) {
                self::$_content = str_replace($matches[0][$key], "<?php endforeach; ?>", self::$_content);
            }
        }
    }


}
