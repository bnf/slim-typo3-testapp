<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\Bnf\SlimTypo3\App::register(\Bnf\SlimTypo3Testapp\TestApp::class);

\Bnf\SlimTypo3\App::register(function (\Slim\App $app) {
    $app->get('/hello/{name}', function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response): \Psr\Http\Message\ResponseInterface {
        $response->getBody()->write('Hello ' . htmlspecialchars($request->getAttribute('name')));
        return $response;
    });
});
