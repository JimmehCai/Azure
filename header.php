<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($this->_currentPage>1) echo '第'.$this->_currentPage.'页 | '; ?><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' | '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>">
    <?php if ($this->is('post')): ?>
    <link rel="canonical" href="<?php $this->permalink() ?>" />
    <?php endif; ?>
    <?php if ($this->is('index')): ?>
    <link rel="canonical" href="<?php $this->options->siteUrl(); ?>" />
    <?php endif; ?>
    <?php $this->header("generator=&template="); ?>
  </head>
<body>
<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-med-1-4">
        <div class="header">
            <hgroup>
                <a href="<?php $this->options->siteUrl(); ?>">
                    <h1 class="brand-title">
                        <?php $this->options->title(); ?>
                    </h1>
                </a>
                <h2 class="brand-tagline">
                    <?php $this->options->description(); ?>
                </h2>
            </hgroup>
            <nav class="nav">
                <ul class="nav-list">
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                            <li class="nav-item">
                                <a href="<?php $pages->permalink(); ?>" class="button">
                                    <?php $pages->title(); ?>
                                </a>
                            </li>
                            <?php endwhile; ?>
                </ul>
            </nav>
        </div>
<form class="pure-form" id="search">
                    <input type="text" class="pure-input-rounded" name="s" id="s" required="true" placeholder="搜索....">
                </form>
    </div>