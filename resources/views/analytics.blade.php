@extends('layouts.layout')

@section('title', 'Analytics')

@section('content')
    <section class="analytics-filters">
        <input class="analytics-filters__date" type="date">
        <button type="submit" class="analytics-filters__choice primary-btn primary-btn--small primary-btn--transparent">7 дней</button>
        <button type="submit" class="analytics-filters__choice primary-btn primary-btn--small primary-btn--transparent">30 дней</button>
        <button type="submit" class="analytics-filters__choice primary-btn primary-btn--small primary-btn--transparent">месяц</button>
        <button type="submit" class="analytics-filters__choice primary-btn primary-btn--small primary-btn--transparent">квартал</button>
        <button type="submit" class="analytics-filters__choice primary-btn primary-btn--small primary-btn--transparent">год</button>
    </section>
    <section class="analytics-data">
        <table class="analytics-table">
            <thead>
                <tr class="analytics-table__row">
                    <th class="analytics-table__row-item  analytics-table__row-title">
                        ID
                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">
                        Название
                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">
                        Статус
                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">
                        Отправлено
                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">
                        Доставлено
                    </th>
                </tr>
                <tr class="analytics-table__row">
                    <th class="analytics-table__row-item  analytics-table__row-title">
                        Итого
                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">

                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">

                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">

                    </th>
                    <th class="analytics-table__row-item  analytics-table__row-title">

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="analytics-table__row">
                    <td class="analytics-table__row-item analytics-table__row__content">
                        103
                    </td>
                    <td class="analytics-table__row-item analytics-table__row__content">
                        День рождения клиента
                    </td>
                    <td class="analytics-table__row-item analytics-table__row__content">
                        <span class="analytics-table__row-item-status">Работает</span>
                    </td>
                    <td class="analytics-table__row-item analytics-table__row__content">
                        100
                    </td>
                    <td class="analytics-table__row-item analytics-table__row__content">
                        80
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
