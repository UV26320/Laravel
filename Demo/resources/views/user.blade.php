@include('common.header')

<h1>Hello, it's me</h1>


<!-- First Include: Pass Default Value -->
@include('common.inner', ['page' => 'Default page content'])

<!-- Second Include: Pass Specific Value -->
@include('common.inner', ['page' => 'We can pass data to a sub view'])


<!-- ========================================================================================================================== -->

<!-- if sub view is not exit then we can use some kind of Specific include -->

<!-- here we not get error -->
@includeIf('common.common')

<!-- here we got error -->
<!-- @include('common.common') -->