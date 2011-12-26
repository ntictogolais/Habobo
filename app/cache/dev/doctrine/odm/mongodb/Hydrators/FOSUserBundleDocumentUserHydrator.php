<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class FOSUserBundleDocumentUserHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data)
    {
        $hydratedData = array();

        /** @Field(type="string") */
        if (isset($data['username'])) {
            $value = $data['username'];
            $return = (string) $value;
            $this->class->reflFields['username']->setValue($document, $return);
            $hydratedData['username'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['usernameCanonical'])) {
            $value = $data['usernameCanonical'];
            $return = (string) $value;
            $this->class->reflFields['usernameCanonical']->setValue($document, $return);
            $hydratedData['usernameCanonical'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['email'])) {
            $value = $data['email'];
            $return = (string) $value;
            $this->class->reflFields['email']->setValue($document, $return);
            $hydratedData['email'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['emailCanonical'])) {
            $value = $data['emailCanonical'];
            $return = (string) $value;
            $this->class->reflFields['emailCanonical']->setValue($document, $return);
            $hydratedData['emailCanonical'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['enabled'])) {
            $value = $data['enabled'];
            $return = (bool) $value;
            $this->class->reflFields['enabled']->setValue($document, $return);
            $hydratedData['enabled'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['salt'])) {
            $value = $data['salt'];
            $return = (string) $value;
            $this->class->reflFields['salt']->setValue($document, $return);
            $hydratedData['salt'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['password'])) {
            $value = $data['password'];
            $return = (string) $value;
            $this->class->reflFields['password']->setValue($document, $return);
            $hydratedData['password'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['lastLogin'])) {
            $value = $data['lastLogin'];
            if ($value instanceof \MongoDate) { $date = new \DateTime(); $date->setTimestamp($value->sec); $return = $date; } else { $return = new \DateTime($value); }
            $this->class->reflFields['lastLogin']->setValue($document, $return);
            $hydratedData['lastLogin'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['locked'])) {
            $value = $data['locked'];
            $return = (bool) $value;
            $this->class->reflFields['locked']->setValue($document, $return);
            $hydratedData['locked'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['expired'])) {
            $value = $data['expired'];
            $return = (bool) $value;
            $this->class->reflFields['expired']->setValue($document, $return);
            $hydratedData['expired'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['expiresAt'])) {
            $value = $data['expiresAt'];
            if ($value instanceof \MongoDate) { $date = new \DateTime(); $date->setTimestamp($value->sec); $return = $date; } else { $return = new \DateTime($value); }
            $this->class->reflFields['expiresAt']->setValue($document, $return);
            $hydratedData['expiresAt'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['confirmationToken'])) {
            $value = $data['confirmationToken'];
            $return = (string) $value;
            $this->class->reflFields['confirmationToken']->setValue($document, $return);
            $hydratedData['confirmationToken'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['passwordRequestedAt'])) {
            $value = $data['passwordRequestedAt'];
            if ($value instanceof \MongoDate) { $date = new \DateTime(); $date->setTimestamp($value->sec); $return = $date; } else { $return = new \DateTime($value); }
            $this->class->reflFields['passwordRequestedAt']->setValue($document, $return);
            $hydratedData['passwordRequestedAt'] = $return;
        }

        /** @Field(type="hash") */
        if (isset($data['roles'])) {
            $value = $data['roles'];
            $return = $value;
            $this->class->reflFields['roles']->setValue($document, $return);
            $hydratedData['roles'] = $return;
        }
        return $hydratedData;
    }
}