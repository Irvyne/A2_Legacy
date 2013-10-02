<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class User extends BaseHydrate implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var SessionStorageInterface
     */
    private $session;

    /**
     * Constructor
     *
     * @param array $array
     * @param SessionStorageInterface $session
     */
    public function __construct(SessionStorageInterface $session, array $array = null) {
        $this->session = $session;
        if (null !== $array)
            $this->hydrate($array);
        else
            $this->loadUserFromSession();
    }

    /**
     * Destructor
     */
    public function __destruct() {
        $this->storeUserInSession();
    }

    /**
     * Store the current user in session
     *
     * @return mixed
     */
    public function storeUserInSession() {
        $userSerialized = serialize(array(
            'id'        => $this->getId(),
            'username'  => $this->getUsername(),
        ));
        return $this->session->setSession('user', $userSerialized);
    }

    /**
     * Self-hydrate the class if user is already stored in session
     *
     * @return bool
     */
    public function loadUserFromSession() {
        if ($sessionUser = $this->session->getSession('user')) {
            $this->hydrate(unserialize($sessionUser));
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}