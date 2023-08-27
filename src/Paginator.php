<?php

namespace Nece\Gears;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

/**
 * 分页类
 *
 * @Author nece001@163.com
 * @DateTime 2023-08-27
 */
class Paginator implements ArrayAccess, Countable, IteratorAggregate
{

    private $limit;
    private $total;
    private $current_page;
    private $last_page;
    private $items = array();

    /**
     * 构造
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param integer $limit 每页数量
     * @param integer $total 总数量
     * @param integer $current_page 当前页码
     */
    public function __construct(int $limit, int $total, int $current_page)
    {
        $this->limit = $limit;
        $this->total = $total;
        $this->current_page = $current_page;
        $this->last_page = ceil($this->total / $this->limit);
    }

    /**
     * 添加记录
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param mixed $item
     *
     * @return void
     */
    public function addItem($item)
    {
        $this->items[] = $item;
    }

    /**
     * 设置记录集
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param array $items
     *
     * @return void
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * 键是否存在
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param mixed $offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return array_key_exists($offset, $this->items);
    }

    /**
     * 获取值
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->items[$offset];
    }

    /**
     * 设置值
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet($offset,  $value): void
    {
        $this->items[$offset] = $value;
    }

    /**
     * 删除键
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->items[$offset]);
    }

    /**
     * 数量
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return integer
     */
    public function count(): int
    {
        return count($this->items);
    }

    /**
     * 获取迭代器
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }

    /**
     * 是否空
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return count($this->items) <= 0;
    }

    /**
     * 获取每页数量
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * 获取总数量
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return integer
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * 获取当前页码
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return integer
     */
    public function getCurrentPage(): int
    {
        return $this->current_page;
    }

    /**
     * 获取最后一页页码（总页数）
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return integer
     */
    public function getLastPage(): int
    {
        return $this->last_page;
    }

    /**
     * 获取记录列表
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * 转为数组
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @return array
     */
    public function toArray(): array
    {
        $data = array(
            'limit' => $this->getLimit(),
            'total' => $this->getTotal(),
            'current_page' => $this->getCurrentPage(),
            'last_page' => $this->getLastPage(),
            'items' => $this->getItems()
        );

        return $data;
    }
}
