$basketRes = Sale\Internals\BasketTable::getList(array(
    'filter' => array(
        'FUSER_ID' => Sale\Fuser::getId(), 
        'ORDER_ID' => null,
        'LID' => SITE_ID,
        'CAN_BUY' => 'Y',
    )
));

while ($item = $basketRes->fetch()) {
    $basketItemId[] = $item['ID'];
}
